<div ref="serma_cc_results" class="px-4 md:px-0">
    <div class="container border rounded-lg mt-6 border-[#ECAC4A]" v-if="show_result">
        <div class="grid grid-cols-12 gap-2 p-6 bg-[#ecac4a1a]">
            <div class="col-span-12">
                <p class="text-black text-13px md:text-16px text-center">
                    Es posible que haya quedado embarazada el:
                <h3 class="text-18px md:text-[24px] font-semibold text-center text-[#ECAC4A]">
                    {{ formatDate({ d: result_date }) }}
                </h3>

            </div>
        </div>
        <div class="grid grid-cols-1 pt-6 pl-4 pr-6 my-4">
            <div class="flex justify-center">
                <img class="w-[217px]" src="<?= SERMA_BABY_CONCEPTION_URL ?>/assets/img/result.svg">
            </div>
        </div>
        <div class="px-9 mb-4 flex justify-center">
            <button type="button"
                class="w-full md:w-auto my-3 rounded px-6 py-3 text-purple-darken text-center font-normal bg-transparent"
                @click="resetForm">
                <span class="fas fa-chevron-left mr-2 "></span>
                <span class="text-14px">Comenzar de nuevo</span>
            </button>
        </div>
    </div>
</div>