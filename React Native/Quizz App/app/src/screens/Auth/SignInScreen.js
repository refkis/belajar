import React from 'react'
import { View, Text, SafeAreaView, ScrollView, TextInput, StatusBar, TouchableOpacity } from 'react-native'
import Icon from 'react-native-vector-icons/MaterialIcons';
import FontAwesome from 'react-native-vector-icons/FontAwesome';
import myColor from '../../../style/myColor'
import myStyle from '../../../style/myStyle'

function SignInScreen() {
    return (
        <SafeAreaView style={{ paddingHorizontal: 20, flex: 1, backgroundColor: myColor.background }}>
            <StatusBar hidden={true} />
            <ScrollView showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>
                <View style={{ flexDirection: 'row', marginTop: 15 }}>
                    <Text style={{ fontWeight: 'bold', fontSize: 50, color: myColor.softGray }}>
                        Si
                    </Text>
                    <Text style={{ fontWeight: 'bold', fontSize: 50, color: myColor.yellow }}>
                        Cerdas
                    </Text>
                </View>
                <View style={{ marginTop: 50 }}>
                    <Text style={{ fontWeight: 'bold', fontSize: 27, color: myColor.light }}>
                        Selamat Datang Kembali
                    </Text>
                    <Text style={{ fontSize: 16, color: myColor.softGray }}>
                        Silahkan login untuk melanjutkan
                    </Text>
                </View>
                <View style={{ marginTop: 30 }}>
                    <View style={myStyle.inputContainer}>
                        <Icon
                            name="person-outline"
                            size={25}
                            color={myColor.purple}
                            style={myStyle.inputIcon}>
                        </Icon>
                        <TextInput
                            placeholder="Username"
                            style={myStyle.input}>

                        </TextInput>
                    </View>
                    <View style={myStyle.inputContainer}>
                        <Icon
                            name="lock-outline"
                            size={25}
                            color={myColor.purple}
                            style={myStyle.inputIcon}>
                        </Icon>
                        <TextInput
                            placeholder="Password"
                            style={myStyle.input}
                            secureTextEntry>
                        </TextInput>
                    </View>
                    <TouchableOpacity style={myStyle.btnPrimary}>
                        <Text style={{ color: myColor.white, fontWeight: 'bold', fontSize: 18 }}>
                            LOGIN
                        </Text>
                    </TouchableOpacity>
                    <View style={{ marginVertical: 50, flexDirection: 'row', justifyContent: 'center', alignItems: 'center' }}>
                        <View style={myStyle.line}></View>
                        <Text style={{ fontWeight: 'bold', marginHorizontal: 5, color: myColor.softGray }}>
                            Atau
                        </Text>
                        <View style={myStyle.line} />
                    </View>
                    <View style={{ flexDirection: 'row', justifyContent: 'space-between' }}>
                        <TouchableOpacity style={myStyle.btnSecondary}>
                            <Text style={{}}>
                                Login dengan
                            </Text>
                            <FontAwesome name={'facebook'} style={{ color: myColor.blue, fontSize: 20, marginLeft: 5 }} />
                        </TouchableOpacity>
                        <View style={{ width: 10, }}></View>
                        <TouchableOpacity style={myStyle.btnSecondary}>
                            <Text style={{}}>
                                Login dengan
                            </Text>
                            <FontAwesome name={'google'} style={{ color: myColor.red, fontSize: 20, marginLeft: 5 }} />
                        </TouchableOpacity>
                    </View>
                    <View style={{ flexDirection: 'row', marginBottom: 15, marginTop: 30, alignItem: 'flex-end', justifyContent: 'center' }}>
                        <Text style={{ fontWeight: 'bold', fontSize: 16, color: myColor.softGray }}>
                            Belum punya akun ?{" "}
                        </Text>
                    
                        <TouchableOpacity >
                            <Text style={{ fontWeight: 'bold', fontSize: 16, color: myColor.cream }}>
                                 Daftar disini
                            </Text>
                        </TouchableOpacity>
                    </View>
                </View>
            </ScrollView>
        </SafeAreaView>
    )
}
export default SignInScreen