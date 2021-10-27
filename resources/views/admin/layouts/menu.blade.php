<li class="{{ Request::is('admin/nameservers/nameservers*') ? 'active' : '' }}">
    <a href="{!! route('admin.nameservers.nameservers.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="servers" data-size="18"
               data-loop="true"></i>
               Nameservers
    </a>
</li>

<li class="{{ Request::is('admin/orderStatus/orderStatuses*') ? 'active' : '' }}">
    <a href="{!! route('admin.orderStatus.orderStatuses.index') !!}">
    <i class="livicon" data-c="#31B0D5" data-hc="#31B0D5" data-name="list" data-size="18"
               data-loop="true"></i>
               OrderStatuses
    </a>
</li>

<li class="{{ Request::is('admin/orderNameServers/orderNameServers*') ? 'active' : '' }}">
    <a href="{!! route('admin.orderNameServers.orderNameServers.index') !!}">
    <i class="livicon" data-c="#31B0D5" data-hc="#31B0D5" data-name="list" data-size="18"
               data-loop="true"></i>
               OrderNameServers
    </a>
</li>

<li class="{{ Request::is('admin/orderInvoice/orderInvoices*') ? 'active' : '' }}">
    <a href="{!! route('admin.orderInvoice.orderInvoices.index') !!}">
    <i class="livicon" data-c="#31B0D5" data-hc="#31B0D5" data-name="list" data-size="18"
               data-loop="true"></i>
               OrderInvoices
    </a>
</li>

<li class="{{ Request::is('admin/fredClient/fredClients*') ? 'active' : '' }}">
    <a href="{!! route('admin.fredClient.fredClients.index') !!}">
    <i class="livicon" data-c="#31B0D5" data-hc="#31B0D5" data-name="list" data-size="18"
               data-loop="true"></i>
               FredClients
    </a>
</li>

