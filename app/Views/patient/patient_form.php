
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

        <div class="col-span-12 sm:col-span-12">
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
                            <select id="provinces_selector" name="province"
                                    class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                            >
                                <option value="">Select Province</option>
                                <?php foreach ($provinces as $prov): ?>
                                    <option value="<?php echo $prov->id_provinsi; ?>"><?php echo $prov->nama_provinsi; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>

                        <label class="block">
                            <span>City</span>
                            <select id="cities_selector"
                                    name="city"
                                    class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                            >
                                <option value="">--Select Province First--</option>
                            </select>
                        </label>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <label class="block">
                            <span>District</span>
                            <select id="district_selector"
                                    name="district"
                                    class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                            >
                                <option value="">--Select City First--</option>
                            </select>
                        </label>
                        <label class="block">
                            <span>Village</span>
                            <select id="village_selector"
                                    name="village"
                                    class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                            >
                                <option value="">--Select District First--</option>
                            </select>
                        </label>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div x-data="{sameBillingAddress:true}">
                        <div class="flex-wrap items-start space-y-2 pt-2 sm:flex sm:space-y-0 sm:space-x-5">
                            <label class="inline-flex items-center space-x-2">
                                <input x-model="sameBillingAddress" class="form-checkbox is-basic size-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                       name="appointment" type="checkbox">
                                <span>Add patient to Appointment</span>
                            </label>
                        </div>
                        <div x-show="sameBillingAddress" x-collapse="" style="height: auto; overflow: hidden;">
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

                    <div class="flex sm:justify-start space-x-2" style="padding-top: 20px; justify-content: center; align-items: center">
                        <button style="padding-inline: 60px;" class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            <span>Save Patient</span>
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('content-css'); ?>

<?= $this->endSection(); ?>

<?= $this->section('content-js'); ?>
<script src="<?php assets("packages/jquery-3.7.1.min.js"); ?>"></script>
<script>
    $("#provinces_selector").on('change', function(){
        $.get("<?php echo base_url('index.php/address/cities/')?>" + this.value, function(data, status){
            console.log("Data: " + data + "\nStatus: " + status);


            var selector = $('#cities_selector');
            selector.empty()
            $('#district_selector').empty().append($("<option></option>").attr("value", "").text("--Select City First--"))
            $('#village_selector').empty().append($("<option></option>").attr("value", "").text("--Select District First--"))


            selector.append($("<option></option>").attr("value", "").text("Select City"))
            $.each(JSON.parse(data), function (key, address) {
                selector.append($("<option></option>").attr("value", address.id_kabupaten).text(address.nama_kabupaten))
            });
        });
    });

    $("#cities_selector").on('change', function(){
        $.get("<?php echo base_url('index.php/address/districts/')?>" + this.value, function(data, status){
            console.log("Data: " + data + "\nStatus: " + status);

            var selector = $('#district_selector');
            selector.empty()
            $('#village_selector').empty().append($("<option></option>").attr("value", "").text("--Select District First--"))

            selector.append($("<option></option>").attr("value", "").text("Select District"))
            $.each(JSON.parse(data), function (key, address) {
                selector.append($("<option></option>").attr("value", address.id_kecamatan).text(address.nama_kecamatan))
            });
        });
    });

    $("#district_selector").on('change', function(){
        $.get("<?php echo base_url('index.php/address/villages/')?>" + this.value, function(data, status){
            console.log("Data: " + data + "\nStatus: " + status);

            var selector = $('#village_selector');
            selector.empty()
            selector.append($("<option></option>").attr("value", "").text("Select Village"))
            $.each(JSON.parse(data), function (key, address) {
                selector.append($("<option></option>").attr("value", address.id_desa).text(address.nama_desa))
            });
        });
    });
</script>
<?= $this->endSection(); ?>
