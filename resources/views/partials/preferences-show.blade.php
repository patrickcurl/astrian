@auth
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle shadow" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-eye"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
        <a  href="?set_preference=show&value=my" class="dropdown-item @if (Auth::user()->getPreference('show', 'my') == 'my') active @endif">  
        {{__('Show my groups')}}
        </a>
        
        <a  href="?set_preference=show&value=all" class="dropdown-item @if (Auth::user()->getPreference('show', 'my') == 'all') active @endif">
        {{__('Show all groups')}}
        </a>
        
        @if (Auth::user()->isAdmin())
        <a  href="?set_preference=show&value=admin" class="dropdown-item @if (Auth::user()->getPreference('show', 'my') == 'admin') active @endif">
        {{__('Show all groups (admin overview)')}}
        </a>
        @endif

      </div>
    </div>
@endauth
