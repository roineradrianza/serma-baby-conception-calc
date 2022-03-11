<div ref="serma_cc_container" class="container md:border border-gray-300 rounded-2xl px-4 md:px-0">
    <div class="grid grid-cols-1 md:grid-cols-8">
        <div class="hidden md:inline col-span-3 px-3 md:px-3 pt-6 pb-10 bg-cover"
            style="background-image: url('<?= SERMA_BABY_CONCEPTION_URL ?>/assets/img/section-1-bg.svg'); background-repeat: no-repeat">
            <div class="baby-comment-box pt-1 px-4">
                <h2 class="text-18px md:text-[30px] text-center md:text-left text-black font-semibold mb-4">
                    Calculadora de <span class="font-['Cookie'] text-purple-lighten font-normal text-40px">Concepción</span>
                </h2>
            </div>
            <img class="pb-3 max-w-[208px] mx-auto"
                src="<?= SERMA_BABY_CONCEPTION_URL ?>/assets/img/conception-date-bg.png">
        </div>

        <div class="bg-yellow-lighten md:col-span-5 p-3 md:p-6 rounded-2xl md:rounded-l-none">
            <form method="post">
                <h2 class="md:hidden mx-8 px-4 bg-white rounded-tr-3xl rounded-bl-3xl text-18px text-black text-center font-semibold mb-4">
                    Calculadora de <span class="font-['Cookie'] text-purple-lighten font-normal text-[28px]">Concepción</span></h2>
                <div class="grid grid-cols-5 mb-4">
                    <div class="col-span-3 flex items-center">
                        <img class="w-[20px] mr-2"
                            src="<?= SERMA_BABY_CONCEPTION_URL ?>/assets/icons/gestational-age/drop.svg">
                        <label class="text-secondary text-13px md:text-14px" for="">
                            Primer día de su último período
                        </label>
                    </div>
                    <div class="col-span-2 relative">
                        <input datepicker ref="fd_last_period_input" datepicker-format="dd/mm/yyyy"
                            datepicker-language="es" type="text"
                            class="bg-gray-50 border border-gray-300 text-icon text-12px md:text-14px rounded-lg block w-full pr-10 p-2.5"
                            placeholder="DD/MM/YYYY">
                        <div class="flex absolute inset-y-0 right-0 items-center pl-3 pointer-events-none">
                            <img class="w-[20px] mr-2" src="<?= SERMA_BABY_CONCEPTION_URL ?>/assets/icons/calendar.svg">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-5 mb-4">
                    <div class="col-span-3 flex items-center">
                        <img class="w-[20px] mr-2"
                            src="<?= SERMA_BABY_CONCEPTION_URL ?>/assets/icons/conception-date/total-cycle.svg">
                        <label class="text-secondary text-13px md:text-14px" for="">
                            Duración del ciclo
                        </label>
                    </div>
                    <div class="col-span-2 relative">
                        <input ref="cycle_duration_input" type="number"
                            class="bg-gray-50 border border-gray-300 text-icon text-12px md:text-14px rounded-lg block w-full pr-10 p-2.5"
                            value="28" min="21" max="45">
                    </div>
                </div>

                <div class="grid grid-cols-5 mb-4">
                    <div class="col-span-3 flex items-center">
                        <img class="w-[20px] mr-2"
                            src="<?= SERMA_BABY_CONCEPTION_URL ?>/assets/icons/conception-date/second-total-cycle.svg">
                        <label class="text-secondary text-13px md:text-14px" for="">
                            Segunda parte del ciclo
                        </label>
                    </div>
                    <div class="col-span-2 relative">
                        <input ref="second_cycle_duration_input" type="number"
                            class="bg-gray-50 border border-gray-300 text-icon text-12px md:text-14px rounded-lg block w-full pr-10 p-2.5"
                            value="10" min="9" max="16">
                    </div>
                </div>

                <button type="button"
                    class="my-3 w-full md:w-auto rounded text-14px bg-green-lighten px-4 py-4 md:px-6 md:py-3 text-white font-regular"
                    @click="getResults" :disabled="loading">
                    <span v-if="loading">Calculando...</span>
                    <span v-else>
                        Calcula tu fecha de concepción
                    </span>
                </button>
            </form>
        </div>

    </div>
</div>

<?= SERMA_BABY_CONCEPTION_TEMPLATE::show_template('conception-date/form/results') ?>