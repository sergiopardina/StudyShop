@extends('layouts.admin_layout')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="main-wrapper">
        <aside>
            <ul>
                <li class="content"><i class="bi bi-grid-fill"></i>{{__('Content')}}<i
                        class="fa fa-angle-down pull-right"></i>
                    <div class="dropdown-content-menu drop-down">
                        <ul>
                            <li><a href=""><i class="bi bi-list-check"></i>{{__('All categories')}}</a></li>
                            <li><a href=""><i class="bi bi-piggy-bank-fill"></i>{{__('Discount products')}}</a></li>
                        </ul>
                    </div>
                </li>
                <li class="users"><i class="bi bi-person-circle"></i>{{__('Users')}}<i
                        class="fa fa-angle-down pull-right"></i>
                    <div class="dropdown-users-menu drop-down">
                        <ul>
                            <li><i class="bi bi-cart-fill"></i>{{__('Orders')}}
                                <div>
                                    <ul>
                                        <li><a href=""><i class="bi bi-cart-check-fill"></i>{{__('Completed')}}</a></li>
                                        <li><a href=""><i class="bi bi-cart-plus-fill"></i>{{__('In progress')}}</a>
                                        </li>
                                        <li><a href=""><i class="bi bi-cart-x-fill"></i>{{__('Failures')}}</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="admins"><i class="bi bi-people-fill"></i>{{__('Admins')}}<i
                        class="fa fa-angle-down pull-right"></i>
                    <div class="dropdown-admins-menu drop-down">
                        <ul>
                            <li><a href=""><i class="bi bi-person-rolodex"></i>{{__('All personal')}}</a></li>
                            <li><a href=""><i class="bi bi-person-plus-fill"></i>{{__('Add new admin')}}</a></li>
                            <li><a href=""><i class="bi bi-person-check-fill"></i>{{__('Assign roles')}}</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </aside>
    </div>
@endsection
