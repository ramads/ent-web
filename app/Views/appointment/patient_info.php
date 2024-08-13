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
                        <?php echo $patient_gender ?? ''; ?>
                    </p>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-medium text-slate-700 dark:text-navy-100">
                    <?php echo $patient_name ?? ''; ?>
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
                    <p class="text-right"><?php echo $patient_id ?? ''; ?></p>
                </div>
                <div class="flex justify-between">
                    <p class="font-medium text-slate-700 dark:text-navy-100">
                        Address
                    </p>
                    <p class="text-right"><?php echo $patient_village ?? ''; ?> <?php echo $patient_city ?? ''; ?></p>
                </div>
                <div class="flex justify-between">
                    <p class="font-medium text-slate-700 dark:text-navy-100">

                    </p>
                    <p class="text-right"><?php echo $patient_state ?? ''; ?></p>
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