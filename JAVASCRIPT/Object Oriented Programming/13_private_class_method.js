
            class Person {

                say(name) {
                    if (name) {
                        this.#denganNama(name)
                    } else {
                        this.#tanpaNama()
                    }
                }

                #denganNama(name) {
                    return `hello ${name}`
                }

                #tanpaNama() {
                    return `hello Anon`
                }
            }
            const refki = new Person()
            console.log(refki)
            console.log(refki.say("Refki"))
            console.log(refki.#tanpaNama())
        