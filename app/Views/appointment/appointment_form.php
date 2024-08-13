<?= $this->extend('layouts/admin.php'); ?>
<?= $this->section('content'); ?>
<div class="flex flex-col items-center justify-between space-y-4 py-5 sm:flex-row sm:space-y-0 lg:py-6">
    <div class="flex items-center space-x-1">
        <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
            Form Add New Appoinetment
        </h2>
    </div>
</div>
<div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
    <div class="col-span-12 lg:col-span-4">
        <div class="card">
            <div class="tabs flex flex-col">
                <div class="is-scrollbar-hidden overflow-x-auto">
                    <div class="border-b-2 border-slate-150 dark:border-navy-500">
                        <div class="tabs-list -mb-0.5 flex">
                            <button class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-primary px-4 font-medium text-primary dark:border-accent dark:text-accent-light sm:px-5">
                                <i class="fa-solid fa-plus-square text-base"></i>
                                <span>New Appointment</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-content p-4 sm:p-5">
                    <div class="card space-y-5 p-4 sm:p-5" style="box-shadow: none">
                        <label class="block">
                            <span class="font-medium text-slate-600 dark:text-navy-100">Select Patient</span>
                            <select
                                    id="selector_patient"
                                    class="mt-1.5 w-full"
                                    x-init="$el._tom = new Tom($el,{create: false,sortField: {field: 'text',direction: 'asc'}})"
                            >
                                <option value="">Input minimal 3 character</option>
                            </select>
                        </label>
                        <label class="block pt-4">
                            <span>Appointment </span>
                            <label class="relative flex">
                                <input x-init="$el._x_flatpickr = flatpickr($el,{enableTime: true, time_24hr: true, defaultDate: new Date()})" class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent flatpickr-input active"
                                       name="appointment_time" placeholder="Choose datetime..." type="text" readonly="readonly">
                                <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </span>
                            </label>
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex sm:justify-start space-x-2" style="padding-block: 20px; justify-content: center; align-items: center">
                <button style="padding-inline: 60px;" class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    <span>Save Appointment</span>
                </button>
            </div>
        </div>
    </div>
    <div class="col-span-12 lg:col-span-8">
        <div class="card">
            <div class="tabs flex flex-col">
                <div class="is-scrollbar-hidden overflow-x-auto">
                    <div class="border-b-2 border-slate-150 dark:border-navy-500">
                        <div class="tabs-list -mb-0.5 flex">
                            <button class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-primary px-4 font-medium text-primary dark:border-accent dark:text-accent-light sm:px-5">
                                <i class="fa-solid fa-info-circle text-base"></i>
                                <span>Patient Information</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="patient-card" class="tab-content p-4 sm:p-5">
<!--                    <div id="patient-content">Select patient first</div>-->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-1 lg:gap-6">
                        <div class="rounded-lg bg-info/10 px-4 pb-5 dark:bg-navy-800 sm:px-5">
                            <div class="flex items-center justify-between py-3">
                                <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                    Patient
                                </h2>
                            </div>
                            <div class="space-y-4">
                                <div class="flex justify-between">
                                    <div class="avatar size-16">
                                        <img class="rounded-full" src="<?php assets('images/avatar/male_user.png');?>" alt="image">
                                    </div>
                                    <div>
                                        <p>Gender</p>
                                        <p class="text-xl font-medium text-slate-700 dark:text-navy-100">
                                            Woman
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-slate-700 dark:text-navy-100">
                                        John Doe
                                    </h3>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Patient Name
                                    </p>
                                </div>
                                <div class="space-y-3 text-xs+">
                                    <div class="flex justify-between">
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            NIK
                                        </p>
                                        <p class="text-right">527187928479357394</p>
                                    </div>
                                    <div class="flex justify-between">
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            Address
                                        </p>
                                        <p class="text-right">Village, City</p>
                                    </div>
                                    <div class="flex justify-between">
                                        <p class="font-medium text-slate-700 dark:text-navy-100">

                                        </p>
                                        <p class="text-right">State</p>
                                    </div>
                                    <div class="flex justify-between">
                                        <p class="font-medium text-slate-700 dark:text-navy-100">
                                            Last Appointment
                                        </p>
                                        <p class="text-right">25 May 2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('content-css'); ?>

<?= $this->endSection(); ?>

<?= $this->section('content-js'); ?>
<script src="<?php assets("packages/jquery-3.7.1.min.js"); ?>"></script>
<script>

</script>
<?= $this->endSection(); ?>
