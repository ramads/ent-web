
<?= $this->extend('layouts/admin.php'); ?>
<?= $this->section('content'); ?>
<div class="flex flex-col items-center justify-between space-y-4 py-5 sm:flex-row sm:space-y-0 lg:py-6">
    <div class="flex items-center space-x-1">
        <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
            Form Add New Patient
        </h2>
    </div>
</div>
<div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">

        <div class="col-span-12 sm:col-span-8">
            <div class="card p-4 sm:p-5">
                <form action="<?php echo base_url('index.php/patient/save'); ?>" method="post" accept-charset="utf-8">
                <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                    Patient Information
                </p>
                <div class="mt-4 space-y-4">
                    <label class="block">
                        <span>Patient Name</span>
                        <span class="relative mt-1.5 flex">
                        <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                               placeholder="Patient Name" type="text" name="nama_pasien">
                        <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                          <i class="fa-regular fa-user text-base"></i>
                        </span>
                      </span>
                    </label>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <label class="block">
                            <span>Idetity Number</span>
                            <span class="relative mt-1.5 flex">
                          <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                 placeholder="Identity Number (NIK)" type="text" name="NIK">
                          <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <i class="far fa-address-card text-base"></i>
                          </span>
                        </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
                        <label class="block sm:col-span-8">
                            <span>Gender</span>
                            <div class="relative mt-1.5 flex">
                                <div class="inline-space">
                                    <label class="inline-flex items-center space-x-2">
                                        <input value="pria" class="form-radio is-outline size-5 rounded-full border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                                               name="gender" type="radio">
                                        <span>Male</span>
                                    </label>
                                    <label class="inline-flex items-center space-x-2">
                                        <input value="wanita" class="form-radio is-outline size-5 rounded-full border-slate-400/70 before:bg-secondary checked:border-secondary hover:border-secondary focus:border-secondary dark:border-navy-400 dark:before:bg-secondary-light dark:checked:border-secondary-light dark:hover:border-secondary-light dark:focus:border-secondary-light"
                                               name="gender" type="radio">
                                        <span>Female</span>
                                    </label>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <label>
                            <span class="font-medium text-slate-600 dark:text-navy-100">Date of Birth</span>
                            <span class="relative mt-1.5 flex">
                              <input x-init="$el._x_flatpickr = flatpickr($el)" class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input"
                                     placeholder="Choose date..." type="text" readonly="readonly" name="dob">
                              <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                              </span>
                            </span>
                        </label>
                    </div>
                    <label class="block">
                        <span>Address</span>
                        <textarea name="address" rows="4" placeholder="Your Address (Area and Street)" class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"></textarea>
                    </label>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <label class="block">
                            <span>Province/State</span>
                            <span class="relative mt-1.5 flex">
                          <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                 placeholder="State/Province" type="text" name="province">
                          <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <i class="fa-solid fa-flag"></i>
                          </span>
                        </span>
                        </label>
                        <label class="block">
                            <span>City</span>
                            <span class="relative mt-1.5 flex">
                          <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                 placeholder="City/Town" type="text" name="city">
                          <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <i class="fa-solid fa-city text-base"></i>
                          </span>
                        </span>
                        </label>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <label class="block">
                            <span>District</span>
                            <span class="relative mt-1.5 flex">
                          <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                 placeholder="District" type="text" name="district">
                          <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <i class="fa-solid fa-location-pin text-base"></i>
                          </span>
                        </span>
                        </label>
                        <label class="block">
                            <span>Village</span>
                            <span class="relative mt-1.5 flex">
                          <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                 placeholder="Village" type="text" name="village">
                          <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <i class="fa-solid fa-map-location"></i>
                          </span>
                        </span>
                        </label>
                    </div>

                    <div class="flex sm:justify-start space-x-2" style="padding-top: 20px">
                        <button class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            <span>Save Patient</span>
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
</div>
<?= $this->endSection(); ?>