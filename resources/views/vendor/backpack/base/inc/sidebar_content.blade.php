{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('admin') }}"><i class="nav-icon la la-question"></i> Admins</a></li>


<li class="nav-item"><a class="nav-link" href="{{ backpack_url('offre') }}"><i class="nav-icon la la-question"></i> Offres</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('condidats') }}"><i class="nav-icon la la-question"></i> Condidats</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('encadreur') }}"><i class="nav-icon la la-question"></i> Encadreurs</a></li>