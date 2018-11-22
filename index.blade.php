<div class="m-portlet m-portlet--full-height">
    <!--begin: Portlet Head-->
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    Hotel Registration
                    <small>
                        Input The Correct Hotel Information
                    </small>
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item">
                    <a href="#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon"
                       data-direction="left" data-width="auto" title=""
                       data-original-title="Get help with filling up this form">
                        <i class="flaticon-info m--icon-font-size-lg3"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--end: Portlet Head-->
    <!--begin: Form Wizard-->
    <div class="m-wizard m-wizard--2 m-wizard--success m-wizard--step-first" id="m_wizard">
        <!--begin: Message container -->
        <div class="m-portlet__padding-x">
            <!-- Here you can put a message or alert -->
        </div>
        <!--end: Message container -->
        <!--begin: Form Wizard Head -->

        <div class="m-wizard__head m-portlet__padding-x">
            <!--begin: Form Wizard Progress -->
            <div class="m-wizard__progress">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                         aria-valuemax="100"></div>
                </div>
            </div>
            <!--end: Form Wizard Progress -->
            <!--begin: Form Wizard Nav -->
            <div class="m-wizard__nav">
                <div class="m-wizard__steps">
                    <div class="m-wizard__step m-wizard__step--current" data-wizard-target="#m_wizard_form_step_1">
                        <a href="#" class="m-wizard__step-number">
                    <span>
														<i class="fa  flaticon-placeholder"></i>
													</span>
                        </a>
                        <div class="m-wizard__step-info">
                            <div class="m-wizard__step-title">
                                1. Hotel Information
                            </div>
                            <div class="m-wizard__step-desc">
                                This Page Holds Everything About Hotel
                            </div>
                        </div>
                    </div>
                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_2">
                        <a href="#" class="m-wizard__step-number">
                    <span>
														<i class="fa  flaticon-layers"></i>
													</span>
                        </a>
                        <div class="m-wizard__step-info">
                            <div class="m-wizard__step-title">
                                2. Account Setup
                            </div>
                            <div class="m-wizard__step-desc">
                                Lorem ipsum doler amet elit
                                <br> sed eiusmod tempors
                            </div>
                        </div>
                    </div>
                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_3">
                        <a href="#" class="m-wizard__step-number">
                    <span>
														<i class="fa  flaticon-layers"></i>
													</span>
                        </a>
                        <div class="m-wizard__step-info">
                            <div class="m-wizard__step-title">
                                3. Confirmation
                            </div>
                            <div class="m-wizard__step-desc">
                                Lorem ipsum doler amet elit
                                <br> sed eiusmod tempors
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end: Form Wizard Nav -->
        </div>
        <!--end: Form Wizard Head -->
        <!--begin: Form Wizard Form-->
        <div class="m-wizard__form">
 
            <form class="m-form m-form--label-align-left- m-form--state-" id="m_form" novalidate="novalidate" >
                @csrf
                <!--begin: Form Body -->
                <div class="m-portlet__body">
                    <!--begin: Form Wizard Step 1-->
                    <div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2">
                                <div class="m-form__section m-form__section--first">
                                    <div class="m-form__heading">
                                        <h3 class="m-form__heading-title">
                                            Hotel Details
                                        </h3>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                            * Name:
                                        </label>
                                        <div class="col-xl-9 col-lg-9">
                                            <input type="text" name="name" class="form-control m-input" placeholder="" >
                                            <span class="m-form__help">
																		Please enter your first and last names
																	</span>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                            * Email:
                                        </label>
                                        <div class="col-xl-9 col-lg-9">
                                            <input type="email" name="email" class="form-control m-input" placeholder="" >
                                            <span class="m-form__help">
																		We'll never share your email with anyone else
																	</span>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                            * Phone
                                        </label>
                                        <div class="col-xl-9 col-lg-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-phone"></i>
																			</span>
                                                </div>
                                                <input type="text" name="phone" class="form-control m-input" placeholder="" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                <div class="m-form__section">
                                    <div class="m-form__heading">
                                        <h3 class="m-form__heading-title">
                                            Hotel Address
                                            <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="Some help text goes here"></i>
                                        </h3>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                            * Detailed Address:
                                        </label>
                                        <div class="col-xl-9 col-lg-9">
                                            <input type="text" name="detailedAddress" class="form-control m-input" placeholder="" >
                                        </div>
                                    </div>


                                    <div class="form-group m-form__group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label" >
                                            * Division:
                                        </label>
                                        <div class="col-xl-9 col-lg-9">
                                            <select name="division" class="form-control m-input" id="divisionId">
                                                <option value="">
                                                    Select
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                            * District:
                                        </label>
                                        <div class="col-xl-9 col-lg-9">
                                            <select name="district" class="form-control m-input" id="districtId">
                                                <option value="">
                                                    Select
                                                </option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group m-form__group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                            * Sub District:
                                        </label>
                                        <div class="col-xl-9 col-lg-9">
                                            <select name="subdistrict" class="form-control m-input" id="subDistrict" >
                                                <option value="">
                                                    Select
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                            * Union:
                                        </label>
                                        <div class="col-xl-9 col-lg-9">
                                            <select name="unionbd" class="form-control m-input">
                                                <option value="">
                                                    Select
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Form Wizard Step 1-->
                    <!--begin: Form Wizard Step 2-->
                    <div class="m-wizard__form-step" id="m_wizard_form_step_2">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2">
                                <div class="m-form__section m-form__section--first">
                                    <div class="m-form__heading">
                                        <h3 class="m-form__heading-title">
                                            Account Details
                                        </h3>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label">
                                                * URL:
                                            </label>
                                            <input type="url" name="account_url" class="form-control m-input" placeholder="">
                                            <span class="m-form__help">
																		Please enter your preferred URL  to your dashboard
																	</span>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-lg-6 m-form__group-sub">
                                            <label class="form-control-label">
                                                * Username:
                                            </label>
                                            <input type="text" name="account_username" class="form-control m-input" placeholder="" >
                                            <span class="m-form__help">
																		Your username to login to your dashboard
																	</span>
                                        </div>
                                        <div class="col-lg-6 m-form__group-sub">
                                            <label class="form-control-label">
                                                * Password:
                                            </label>
                                            <input type="password" name="account_password" class="form-control m-input" placeholder="" >
                                            <span class="m-form__help">
																		Please use letters and at least one number and symbol
																	</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                <div class="m-form__section">
                                    <div class="m-form__heading">
                                        <h3 class="m-form__heading-title">
                                            Client Settings
                                        </h3>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-lg-6 m-form__group-sub">
                                            <label class="form-control-label">
                                                * User Group:
                                            </label>
                                            <div class="m-radio-inline">
                                                <label class="m-radio m-radio--solid m-radio--brand">
                                                    <input type="radio" name="account_group" checked="" >
                                                    Sales Person
                                                    <span></span>
                                                </label>
                                                <label class="m-radio m-radio--solid m-radio--brand">
                                                    <input type="radio" name="account_group" >
                                                    Customer
                                                    <span></span>
                                                </label>
                                            </div>
                                            <span class="m-form__help">
																		Please select user group
																	</span>
                                        </div>
                                        <div class="col-lg-6 m-form__group-sub">
                                            <label class="form-control-label">
                                                * Communications:
                                            </label>
                                            <div class="m-checkbox-inline">
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                    <input type="checkbox" name="account_communication[]" checked="" >
                                                    Email
                                                    <span></span>
                                                </label>
                                                <label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
                                                    <input type="checkbox" name="account_communication[]" >
                                                    SMS
                                                    <span></span>
                                                </label>
                                                <label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
                                                    <input type="checkbox" name="account_communication[]" >
                                                    Phone
                                                    <span></span>
                                                </label>
                                            </div>
                                            <span class="m-form__help">
																		Please select user communication options
																	</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                <div class="m-form__section">
                                    <div class="m-form__heading">
                                        <h3 class="m-form__heading-title">
                                            Delivery Type
                                        </h3>
                                    </div>
                                    <div class="form-group m-form__group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="m-option">
																			<span class="m-option__control">
																				<span class="m-radio m-radio--state-brand">
																					<input type="radio" name="billing_delivery" value="">
																					<span></span>
																				</span>
																			</span>
                                                    <span class="m-option__label">
																				<span class="m-option__head">
																					<span class="m-option__title">
																						Standart Delevery
																					</span>
																					<span class="m-option__focus">
																						Free
																					</span>
																				</span>
																				<span class="m-option__body">
																					Estimated 14-20 Day Shipping
                                                (&nbsp;Duties end taxes may be due
                                                upon delivery&nbsp;)
																				</span>
																			</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="m-option">
																			<span class="m-option__control">
																				<span class="m-radio m-radio--state-brand">
																					<input type="radio" name="billing_delivery" value="">
																					<span></span>
																				</span>
																			</span>
                                                    <span class="m-option__label">
																				<span class="m-option__head">
																					<span class="m-option__title">
																						Fast Delevery
																					</span>
																					<span class="m-option__focus">
																						$&nbsp;8.00
																					</span>
																				</span>
																				<span class="m-option__body">
																					Estimated 2-5 Day Shipping
                                                (&nbsp;Duties end taxes may be due
                                                upon delivery&nbsp;)
																				</span>
																			</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="m-form__help">
                                            <!--must use this helper element to display error message for the options-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Form Wizard Step 2-->
                    <!--begin: Form Wizard Step 3-->
                    <div class="m-wizard__form-step" id="m_wizard_form_step_3">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2">
                                <!--begin::Section-->
                                <ul class="nav nav-tabs m-tabs-line--2x m-tabs-line m-tabs-line--danger" role="tablist">
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_form_confirm_1" role="tab">
                                            1. Client Information
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_form_confirm_2" role="tab">
                                            2. Account Setup
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_form_confirm_3" role="tab">
                                            3. Billing Setup
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content m--margin-top-40">
                                    <div class="tab-pane active" id="m_form_confirm_1" role="tabpanel">
                                        <div class="m-form__section m-form__section--first">
                                            <div class="m-form__heading">
                                                <h4 class="m-form__heading-title">
                                                    Client Details
                                                </h4>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    Name:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				name
																			</span>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    Email:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				nick.stone@gmail.com
																			</span>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    Phone
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				+206-78-55034890
																			</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                        <div class="m-form__section">
                                            <div class="m-form__heading">
                                                <h4 class="m-form__heading-title">
                                                    Corresponding Address
                                                    <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="" data-original-title="Some help text goes here"></i>
                                                </h4>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    Address Line 1:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				Headquarters 1120 N Street Sacramento 916-654-5266
																			</span>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    Address Line 2:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				P.O. Box 942873 Sacramento, CA 94273-0001
																			</span>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    City:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				Polo Alto
																			</span>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    State:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				California
																			</span>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    Country:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				USA
																			</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="m_form_confirm_2" role="tabpanel">
                                        <div class="m-form__section m-form__section--first">
                                            <div class="m-form__heading">
                                                <h4 class="m-form__heading-title">
                                                    Account Details
                                                </h4>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    URL:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				sinortech.vertoffice.com
																			</span>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    Username:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				sinortech.admin
																			</span>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    Password:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				*********
																			</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                        <div class="m-form__section">
                                            <div class="m-form__heading">
                                                <h4 class="m-form__heading-title">
                                                    Account Details
                                                </h4>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    URL:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				sinortech.vertoffice.com
																			</span>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    Username:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				sinortech.admin
																			</span>
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">
                                                    Password:
                                                </label>
                                                <div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				*********
																			</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="m_form_confirm_3" role="tabpanel">
                                        <div class="m-form__section m-form__section--first">
                                            <div class="m-form__section">
                                                <div class="m-form__heading">
                                                    <h4 class="m-form__heading-title">
                                                        Client Settings
                                                    </h4>
                                                </div>
                                                <div class="form-group m-form__group m-form__group--sm row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        User Group:
                                                    </label>
                                                    <div class="col-xl-9 col-lg-9">
																				<span class="m-form__control-static">
																					Customer
																				</span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group m-form__group--sm row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        Communications:
                                                    </label>
                                                    <div class="col-xl-9 col-lg-9">
																				<span class="m-form__control-static">
																					Phone, Email
																				</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Section-->
                                <!--end::Section-->
                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                <div class="form-group m-form__group m-form__group--sm row">
                                    <div class="col-xl-12">
                                        <div class="m-checkbox-inline">
                                            <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" name="accept" value="1">
                                                Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Form Wizard Step 3-->
                </div>
                <!--end: Form Body -->
                <!--begin: Form Actions -->
                <div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
                    <div class="m-form__actions">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-4 m--align-left">
                                <a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
															<span>
																<i class="la la-arrow-left"></i>
																&nbsp;&nbsp;
																<span>
																	Back
																</span>
															</span>
                                </a>
                            </div>
                            <div class="col-lg-4 m--align-right">
                                <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
															<span>
																<i class="la la-check"></i>
																&nbsp;&nbsp;
																<span>
																	Submit
																</span>
															</span>
                                </a>
                                <a href="#" class="btn btn-warning m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
															<span>
																<span>
																	Save &amp; Continue
																</span>
																&nbsp;&nbsp;
																<i class="la la-arrow-right"></i>
															</span>
                                </a>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                </div>
                <!--end: Form Actions -->
            </form>
        </div>
        <!--end: Form Wizard Form-->
    </div>
    <!--end: Form Wizard-->
</div>


@section('js')
    <script src="{{url('public/js/Hotel/createHotel.js')}}"></script>
    <script src="{{url('public/js/bootstrap-select.js')}}"></script>
    @endsection