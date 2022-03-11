/*VUE INSTANCE*/
moment.locale('es')
const vm = Vue.createApp({
        data() {
            return {
                loading: false,
                show_result: false,
                result_date: moment().format('YYYY-MM-DD'),
                result_date_default: moment().format('YYYY-MM-DD')
            }
        },

        methods: {
            getResults() {
                let app = this
                app.loading = true

                app.calc().then(res => {
                    app.result_date = res

                    app.loading = false
                    app.show_result = true
                    app.$refs.serma_cc_results.scrollIntoView({
                        behavior: "smooth"
                    })
                })

            },

            resetForm() {
                let app = this
                app.show_result = false
                app.$refs.fd_last_period_input.value = ''
                app.$refs.cycle_duration_input.value = 28
                app.$refs.second_cycle_duration_input.value = 10

                app.result_date = Object.assign({}, app.result_date_default)
                app.$refs.serma_cc_container.scrollIntoView({
                    behavior: "smooth"
                })
            },

            async calc() {
                let app = this

                let fd_last_period = app.$refs.fd_last_period_input.value
                let cycle_total = parseInt(app.$refs.cycle_duration_input.value) || 0
                let second_cycle = parseInt(app.$refs.second_cycle_duration_input.value) || 0

                fd_last_period = fd_last_period.split('/')
                let last_period_date = new Date(fd_last_period[2], fd_last_period[1], fd_last_period[0],)

                let ovulation = new Date();
                let total_date = last_period_date.getTime() + (cycle_total * 86400000) - (second_cycle * 86400000)
                console.log(total_date)
                ovulation.setTime(total_date);

                return moment(ovulation.getTime()).format('YYYY-MM-DD')

            },

            formatDate({
                d = '',
                f = 'DD [de] MMMM [de] YYYY'
            }) {
                return moment(d).format(f)
            }

        }
    })
    .mount('#serma-cc-container')