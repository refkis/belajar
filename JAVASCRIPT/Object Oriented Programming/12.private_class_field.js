
            class Counter {
                #counter = 0;

                increment() {
                    this.#counter ++

                }

                decrement() {
                    this.#counter --

                }
                get() {

                    return this.#counter
                }
            }

            const hitung = new Counter()
            hitung.increment()
            hitung.increment()
            hitung.increment()
            hitung.increment()
            hitung.increment()
            console.log(hitung.get())