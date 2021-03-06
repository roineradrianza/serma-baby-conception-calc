<div ref="serma_ugc_container" class="container md:border border-gray-300 rounded-2xl px-4 md:px-0">
    <div class="grid grid-cols-1 md:grid-cols-8">
        <div class="hidden md:inline col-span-3 px-3 md:px-3 pt-6 pb-4 bg-cover"
            style="background-image: url('<?= SERMA_BABY_CONCEPTION_URL ?>/assets/img/section-1-bg.svg'); background-repeat: no-repeat">
            <img class="pb-3 max-w-[208px] mx-auto"
                src="<?= SERMA_BABY_CONCEPTION_URL ?>/assets/img/ultrasound-gestational-age-bg.png">
        </div>

        <div class="bg-[#62cef933] md:col-span-5 p-3 md:p-6 rounded-2xl">
            <form method="post">
                <h2
                    class="px-4 pt-2 pb-1 bg-[#FFE082] rounded-br-2xl rounded-tl-2xl text-18px text-center md:text-left text-black font-semibold mb-6 md:w-fit">
                    Edad gestacional por <span
                        class="font-['Cookie'] text-[#FB80BA] font-normal text-[28px]">Ultrasonido</span></h2>
                <div class="grid grid-cols-5 mb-4">
                    <div class="col-span-3 flex items-center">
                        <img class="w-[20px] mr-2"
                            src="<?= SERMA_BABY_CONCEPTION_URL ?>/assets/icons/ultrasound-gestational-age/embryo.svg">
                        <label class="text-secondary text-13px md:text-14px" for="">
                            Longitud de embrión
                        </label>
                    </div>
                    <div class="col-span-2 relative">
                        <input v-model="embryo_length_input" type="number"
                            class="bg-gray-50 border border-gray-300 text-icon text-12px md:text-14px rounded-lg block w-full pr-10 p-2.5"
                            placeholder="Mínimo: 20">
                    </div>
                </div>

                <button type="button"
                    class="my-3 w-full md:w-auto rounded text-14px bg-green-lighten px-4 py-4 md:py-3 text-white font-regular"
                    @click="getResults" :disabled="loading">
                    <span v-if="loading">Calculando...</span>
                    <span v-else>
                        Calcula la edad gestacional
                    </span>
                </button>
            </form>
        </div>

    </div>
</div>

<?= SERMA_BABY_CONCEPTION_TEMPLATE::show_template('ultrasound-gestational-age/form/results') ?>