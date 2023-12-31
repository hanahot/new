@extends('layouts.owner')

<style>
    .form-section {
        display: none;
    }

    .form-section.current {
        display: inline;
    }

    .parsley-errors-list {
        color: red;
    }

    .card-header {
    font-weight: 700;
   

}


</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div style="margin-top:15%; margin-bottom:10%" class="card">
                    <div class="card-header"style="background-color: #e7d9cd;color: #ee7600;
  " >{{ __('Add Tenant') }}</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="nav nav-fill my-3">
                            <label class="nav-link shadow-sm step0    border ml-2" >Personal Information</label>
                            <label class="nav-link shadow-sm step1   border ml-2 ">Accomodation Information</label>
                            <label class="nav-link shadow-sm step2   border ml-2 ">Rental Information</label>
                        </div>
                        <form method="POST" action="{{ route('tenant.addTenant') }}" class="tenant_form">

                            {{-- <form method="POST" action="" class="tenant_form"> --}}
                            @csrf
                            <div class="form-section">
                                <div class="row mb-3">
                                    <label for="first_name"
                                        class="col-md-4 col-form-label text-md-end" style="color: #003057;font-weight: 700;">{{ __('First Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="first_name" type="text"
                                            class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                            value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="last_name"
                                        class="col-md-4 col-form-label text-md-end" style="color: #003057;font-weight: 700;">{{ __('Last Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="last_name" type="text"
                                            class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                            value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="phone_number"
                                        class="col-md-4 col-form-label text-md-end" style="color: #003057;font-weight: 700;">{{ __('Phone Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone_number" type="text"
                                            class="form-control @error('phone_number') is-invalid @enderror"
                                            name="phone_number" value="{{ old('phone_number') }}" required
                                            autocomplete="phone_number" autofocus>

                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end" style="color: #003057;font-weight: 700;">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="birthdate"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Birthdate') }}</label>

                                    <div class="col-md-6">
                                        <input id="birthdate" type="date"
                                            class="form-control @error('birthdate') is-invalid @enderror" name="birthdate"
                                            value="{{ old('birthdate') }}" required autocomplete="birthdate"
                                            placeholder="Year-Month-Day">

                                        @error('birthdate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="age"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Age') }}</label>

                                    <div class="col-md-6">
                                        <input id="age" type="age"
                                            class="form-control @error('age') is-invalid @enderror" name="age"
                                            value="{{ old('age') }}" required autocomplete="age" readonly>

                                        @error('age')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="gender"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Gender') }}</label>
                                    <div class="col-md-6">
                                        <select id="gender" class="form-select @error('gender') is-invalid @enderror"
                                            name="gender" required autocomplete="gender">
                                            <option value="" selected>Choose Gender</option>
                                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                                Female
                                            </option>
                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="address"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="address" type="address"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ old('address') }}" required autocomplete="address">

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="occupation"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Occupation') }}</label>

                                    <div class="col-md-6">
                                        <input id="occupation" type="occupation"
                                            class="form-control @error('occupation') is-invalid @enderror"
                                            name="occupation" value="{{ old('occupation') }}" required
                                            autocomplete="occupation">

                                        @error('occupation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="work_address"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Work Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="work_address" type="work_address"
                                            class="form-control @error('work_address') is-invalid @enderror"
                                            name="work_address" value="{{ old('work_address') }}" required
                                            autocomplete="work_address">

                                        @error('work_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="form-section">
                                <div class="row mb-3">
                                    <label for="location"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Location') }}</label>
                                    <div class="col-md-6">
                                        <select id="location"
                                            class="form-select @error('location') is-invalid @enderror" name="location"
                                            required autocomplete="location">
                                            <option value="" selected>Choose location</option>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->location }}"
                                                    {{ old('location') == $location->location ? 'selected' : '' }}>
                                                    {{ $location->location }}</option>
                                            @endforeach
                                        </select>

                                        @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="room_unit"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Room Unit') }}</label>
                                    <div class="col-md-6">
                                        <select id="room_unit" class="form-select" name="room_unit" required>
                                            <option value="" selected>Choose room unit</option>
                                        </select>

                                        @error('room_unit')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="row mb-3">
                                    <label for="room_fee"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Room Fee') }}</label>

                                    <div class="col-md-6">
                                        <input id="room_fee" type="text"
                                            class="form-control @error('room_fee') is-invalid @enderror" name="room_fee"
                                            value="{{ old('room_fee') }}" required autocomplete="room_fee" autofocus
                                            data-readonly readonly>

                                        @error('room_fee')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}

                                <div class="row mb-3">
                                    <label for="room_fee"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Room Fee') }}</label>

                                    <div class="col-md-6">
                                        <input id="room_fee" type="text"
                                            class="form-control @error('room_fee') is-invalid @enderror" name="room_fee"
                                            value="{{ old('room_fee') }}" required autocomplete="room_fee" autofocus
                                            readonly>

                                        @error('room_fee')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="form-section">
                                <div class="row mb-3">
                                    {{-- <label for="property_id"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Room ID') }}</label> --}}

                                    <div class="col-md-6">
                                        <input id="property_id" type="hidden"
                                            class="form-control @error('property_id') is-invalid @enderror"
                                            name="property_id" value="{{ old('property_id') }}"
                                            autocomplete="property_id" autofocus readonly>

                                        @error('property_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Tenant Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus readonly>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="rent_started"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Move-in Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="rent_started" type="date"
                                            class="form-control @error('rent_started') is-invalid @enderror"
                                            name="rent_started" value="{{ old('rent_started', date('Y-m-d')) }}" required
                                            autocomplete="rent_started" autofocus>

                                        @error('rent_started')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="propLocation"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Location') }}</label>

                                    <div class="col-md-6">
                                        <input id="propLocation" type="text"
                                            class="form-control @error('propLocation') is-invalid @enderror"
                                            name="propLocation" value="{{ old('propLocation') }}" required
                                            autocomplete="propLocation" autofocus readonly>

                                        @error('propLocation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="room_unit_display"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Room Unit') }}</label>

                                    <div class="col-md-6">
                                        <input id="room_unit_display" type="text"
                                            class="form-control @error('room_unit_display') is-invalid @enderror"
                                            name="room_unit_display" value="{{ old('room_unit_display') }}" required
                                            autocomplete="room_unit_display" autofocus readonly>

                                        @error('room_unit_display')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="rent_from"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Rent From:') }}</label>

                                    <div class="col-md-6">
                                        <input id="rent_from" type="date"
                                            class="form-control @error('rent_from') is-invalid @enderror"
                                            name="rent_from" value="{{ old('rent_from', date('Y-m-d')) }}" required
                                            autocomplete="rent_from" autofocus>

                                        @error('rent_from')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="due_date"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('To/Due Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="due_date" type="date"
                                            class="form-control @error('due_date') is-invalid @enderror" name="due_date"
                                            value="{{ old('due_date')}}" required autocomplete="due_date" autofocus>

                                        @error('due_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="room_fee_display"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Room Fee') }}</label>
                                    <div class="col-md-6">
                                        <input id="room_fee_display" type="text"
                                            class="form-control @error('room_fee_display') is-invalid @enderror"
                                            name="room_fee_display" value="{{ old('room_fee_display') }}" required
                                            autocomplete="room_fee_display" autofocus readonly
                                            oninput="calculateTotalBillAt()">
                                        @error('room_fee_display')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="water_bill"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Water Bill') }}</label>
                                    <div class="col-md-6">
                                        <input id="water_bill" type="text"
                                            class="form-control @error('water_bill') is-invalid @enderror"
                                            name="water_bill" value="{{ old('water_bill') }}" required
                                            autocomplete="water_bill" autofocus oninput="calculateTotalBillAt()">
                                        @error('water_bill')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="electric_bill"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Electric Bill') }}</label>
                                    <div class="col-md-6">
                                        <input id="electric_bill" type="text"
                                            class="form-control @error('electric_bill') is-invalid @enderror"
                                            name="electric_bill" value="{{ old('electric_bill') }}" required
                                            autocomplete="electric_bill" autofocus oninput="calculateTotalBillAt()">
                                        @error('electric_bill')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="total_bill"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Total Bill') }}</label>
                                    <div class="col-md-6">
                                        <input id="total_bill" type="text"
                                            class="form-control @error('total_bill') is-invalid @enderror"
                                            name="total_bill" value="{{ old('total_bill') }}" required
                                            autocomplete="total_bill" autofocus readonly oninput="calculateTotalBillAt()">
                                        @error('total_bill')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="amount_paid"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Amount Paid') }}</label>
                                    <div class="col-md-6">
                                        <input id="amount_paid" type="text"
                                            class="form-control @error('amount_paid') is-invalid @enderror"
                                            name="amount_paid" value="{{ old('amount_paid') }}" required
                                            autocomplete="amount_paid" autofocus oninput="calculateTotalBillAt()">
                                        @error('amount_paid')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="balance"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Balance') }}</label>
                                    <div class="col-md-6">
                                        <input id="balance" type="text"
                                            class="form-control @error('balance') is-invalid @enderror"
                                            name="balance" value="{{ old('balance') }}" required
                                            autocomplete="balance" autofocus readonly oninput="calculateTotalBillAt()">
                                        @error('balance')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="rentalStatus"
                                        class="col-md-4 col-form-label text-md-end"style="color: #003057;font-weight: 700;">{{ __('Rental Status') }}</label>

                                    <div class="col-md-6">
                                        <select id="rentalStatus"
                                            class="form-select @error('rentalStatus') is-invalid @enderror"
                                            name="rentalStatus" required autocomplete="rentalStatus">
                                            <option value="" selected>Choose rental status</option>
                                            <option value="On Going">Wala pay total bill</option>
                                            <option value="Not Yet Paid">Wa pa kabayad</option>
                                            <option value="Paid">Paid</option>
                                            <option value="Not Fully Paid">Naa pay balance</option>
                                        </select>

                                        @error('rentalStatus')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row mb-0 form form-navigation">
                                <div class="col-md-8 offset-md-4">
                                    <button type="button" class="previous btn btn-primary float-left">&lt;
                                        Previous</button>
                                    <button type="button" class="next btn btn-primary">Next &gt;</button>

                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Tenant') }}
                                    </button>
                                </div>
                                {{-- <a style="cursor: pointer; width: 100px;color:#fff;" class="btn btn-danger"
                                    onclick="history.back()">BACK
                                </a> --}}
                            </div>
                        </form>
                    </div>

                    {{-- FOR MODAL --}}
                    <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                        aria-labelledby="successModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Tenant added successfully!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
