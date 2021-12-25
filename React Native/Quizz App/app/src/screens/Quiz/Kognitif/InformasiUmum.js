import React, { useState, useEffect } from 'react'
import { StyleSheet, Text, View, SafeAreaView, StatusBar, TouchableOpacity, Animated,  ScrollView } from 'react-native'
import Icon from 'react-native-vector-icons/MaterialIcons'
import myColor from '../../../../style/myColor'

const InformasiUmum = () => {

    useEffect(() => {
        fetch('http://10.0.2.2:8000/api/soal/kognitif/INFORMASI_UMUM/token=1234')
            .then(response => response.json())
            .then(data => setData(data))

    }, [])

    const [data, setData] = useState(0)
    const [indexPertanyaan, setindexPertanyaan] = useState(0)
    const [indexJawabanDipilih, setindexJawabanDipilih] = useState(null)
    const [jawabanBenar, setjawabanBenar] = useState(null)
    const [disableJawaban, setdisableJawaban] = useState(false)
    const [skor, setSkor] = useState(0)
    const [showNextButton, setshowNextButton] = useState(false)
    const [progress, setProgress] = useState(new Animated.Value(0));

    //Fungsi list pilihan jawaban
    const pilihan_jawaban =
        [
            data[indexPertanyaan]?.pilihan_a,
            data[indexPertanyaan]?.pilihan_b,
            data[indexPertanyaan]?.pilihan_c,
            data[indexPertanyaan]?.pilihan_d,
            data[indexPertanyaan]?.pilihan_e
        ]
    {/* FUNGSI KUNCI JAWABAN */ }
    const kunciJawaban = () => {
        let kunci = data[indexPertanyaan]?.pilihan_jawaban
        if (kunci == "A") {
            jawaban = data[indexPertanyaan]?.pilihan_a
        } else if (kunci == "B") {
            jawaban = data[indexPertanyaan]?.pilihan_b
        } else if (kunci == "C") {
            jawaban = data[indexPertanyaan]?.pilihan_c
        } else if (kunci == "D") {
            jawaban = data[indexPertanyaan]?.pilihan_d
        } else if (kunci == "E") {
            jawaban = data[indexPertanyaan]?.pilihan_e
        }

        return jawaban.replace("â€™", "'")
    }


    const validasiJawaban = (a) => {
        let jawaban_kunci = kunciJawaban
        setindexJawabanDipilih(a)
        setjawabanBenar(jawaban_kunci)
        setdisableJawaban(true)

        if (a == jawaban_kunci) {
            setSkor(skor + 1)
        }
        setshowNextButton(true)
    }

    const handleNext = () => {
        if (indexPertanyaan == data.length + 1) {

        } else {
            setindexPertanyaan(indexPertanyaan + 1)
            setindexJawabanDipilih(null)
            setjawabanBenar(null)
            setdisableJawaban(false)
        }
        Animated.timing(progress, {
            toValue: indexPertanyaan + 1,
            duration: 1000,
            useNativeDriver: false,
        }).start()
    }

    
    const progressAnime = progress.interpolate({

        inputRange: [0, [data.length]],
        outputRange: ['0%', '100%']
    })

    const renderProgressBar = () => {
        return (
            <View style={{
                width: '100%',
                height: 20,
                backgroundColor: myColor.darkBackground,
                borderRadius: 10,
            }}>
                <Animated.View style={[
                    {
                        height: 20,
                        borderRadius: 10,
                        backgroundColor: myColor.softBackground,
                    },
                    {
                        width: progressAnime
                    }
                ]}>

                </Animated.View>

            </View>
        )
    }
    const renderPertanyaan = () => {
        {/* Jumlah Pertanyaan */ }
        return (
            <View>
                <View style={{
                    flexDirection: 'row',
                    alignItems: 'center',
                }}>
                    <Text style={{ color: myColor.white, fontSize: 20, }}>{indexPertanyaan + 1}/</Text>
                    <Text style={{ color: myColor.softGray, fontSize: 18, }}>{data.length}</Text>
                    <Text style={{ color: myColor.softGray, fontSize: 18, }}>   skor = {skor}</Text>
                </View>
                <Text style={{ color: myColor.white, fontSize: 24, }}>{data[indexPertanyaan]?.pertanyaan.replace("â€¦", "")}?</Text>
            </View>
        )
    }

    const renderPilihan = () => {

        return (
            <View>
                {pilihan_jawaban.map((pilihan, index) => (
                    <TouchableOpacity
                        onPress={() => validasiJawaban(pilihan)}
                        key={index}
                        disabled={disableJawaban}
                        style={[styles.pilihan,
                        {
                            borderColor: pilihan == jawabanBenar ? myColor.success
                                : pilihan == indexJawabanDipilih ? myColor.danger
                                    : myColor.secondary
                        },

                        {
                            backgroundColor: pilihan == jawabanBenar ? myColor.success + 50
                                : pilihan == indexJawabanDipilih ? myColor.danger + 50
                                    : myColor.softBackground + 50
                        }
                        ]}
                    >
                        <Text style={{ color: myColor.white, fontSize: 20, }}>
                            {pilihan}
                        </Text>
                        {
                            pilihan == jawabanBenar ? (
                                <View style={{
                                    width: 30, height: 30, borderRadius: 50,
                                    backgroundColor: myColor.success,
                                    justifyContent: 'center',
                                    alignItems: 'center',
                                }}>
                                    <Icon name="check" color={myColor.white} size={30} />
                                </View>
                            ) :
                                pilihan == indexJawabanDipilih ? (
                                    <View style={{
                                        width: 30, height: 30, borderRadius: 50,
                                        backgroundColor: myColor.danger,
                                        justifyContent: 'center',
                                        alignItems: 'center',
                                    }}>
                                        <Icon name="close" color={myColor.white} size={30} />
                                    </View>
                                ) : null

                        }

                    </TouchableOpacity>
                )
                )}
            </View>
        )
    }

    const renderNextButton = () => {

        if (showNextButton) {
            return (
                <View  >

                    <TouchableOpacity
                        onPress={handleNext}
                        style={{

                            marginTop: 20,
                            width: '100%',
                            height: 50,
                            backgroundColor: myColor.primary,
                            padding: 10,
                            borderRadius: 10,


                        }}
                    >
                        <Text style={{
                            fontSize: 20,
                            color: myColor.white,
                            textAlign: 'center'

                        }}>
                            SELANJUTNYA
                        </Text>
                    </TouchableOpacity>
                </View>
            )

        }
    }


    return (
        <SafeAreaView style={{
            flex: 1
        }}>
            <StatusBar barStyle="light-content" backgroundColor={myColor.darkBackground} />
            <ScrollView style={{
                flex: 1,
                paddingVertical: 40,
                paddingHorizontal: 10,
                backgroundColor: myColor.background,
                position: 'relative',
            }}>
                {renderProgressBar()}
                {renderPertanyaan()}
                {renderPilihan()}
                {renderNextButton()}

            </ScrollView>
        </SafeAreaView>
    )
}

const styles = StyleSheet.create({
    pilihan: {
        borderWidth: 2,
        borderColor: myColor.softBackground,
        backgroundColor: myColor.softBackground + '50',
        height: 60,
        borderRadius: 20,
        alignItems: 'center',
        flexDirection: 'row',
        paddingHorizontal: 20,
        marginVertical: 10,
        justifyContent: 'space-between',
    }
})

export default InformasiUmum
