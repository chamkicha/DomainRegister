#!/bin/bash
if cat /etc/redhat-release | grep -q Fedora
then
    # config repository
    dnf config-manager --add-repo http://archive.nic.cz/yum/fred/fedora/fred.repo
    # install fred
    dnf install -y 'fred-*' -x '*debug*'
elif cat /etc/redhat-release | grep -q " 8"
then
    # config repository
    dnf config-manager --add-repo http://archive.nic.cz/yum/fred/epel/fred.repo
    dnf install -y epel-release
    # install fred
    dnf install -y 'fred-*' -x '*debug*'
else
    yum install -y yum-utils
    if cat /etc/redhat-release | grep -q Enterprise
    then
	yum-config-manager --enable rhel-7-server-optional-rpms rhel-7-server-extras-rpms
    fi
    # config fred repository
    yum-config-manager --add-repo http://archive.nic.cz/yum/fred/epel/fred.repo
    # install repository with dependecies
    yum install -y  https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
    # install new postgresql
    yum install -y https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-7-x86_64/pgdg-redhat96-9.6-3.noarch.rpm
    yum install -y postgresql96-server
    ln -s /usr/pgsql-9.6/bin/pg_ctl /usr/bin/pg_ctl
    ln -s /usr/pgsql-9.6/bin/postgresql96-setup /usr/bin/postgresql-setup
    ln -s /var/lib/pgsql/9.6/data/ /var/lib/pgsql/
    ln -s /usr/lib/systemd/system/postgresql-9.6.service /usr/lib/systemd/system/postgresql.service
    # install fred
    yum install -y 'fred-*' -x '*debug*'
fi

# init db
/usr/bin/postgresql-setup initdb
systemctl start postgresql
su - postgres -c "/usr/sbin/fred-dbmanager install"

# adding system registrar without EPP access
/usr/sbin/fred-admin --registrar_add --handle=REG-SYSTEM --country=CZ --no_vat --system

# start services
systemctl start omniNames fred-rifd fred-adifd fred-pifd fred-logd fred-msgd fred-msgd fred-akmd fred-rsifd fred-pyfred fred-webadmin uwsgi httpd

# enable services for restart
systemctl enable postgresql omniNames fred-rifd fred-adifd fred-pifd fred-logd fred-msgd fred-msgd fred-akmd fred-rsifd fred-pyfred fred-webadmin uwsgi httpd

# lxc bug? sometimes /run/uwsgi is not created
test -d /run/uwsgi/ && echo "/run/uwsgi exists" || { echo "/run/uwsgi missing so creating"; install -o uwsgi -g uwsgi -d /run/uwsgi; }
systemctl start uwsgi
