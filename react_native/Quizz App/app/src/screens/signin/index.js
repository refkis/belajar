import React from 'react'
import { View, Text, SafeAreaView, ScrollView, TextInput, StatusBar, TouchableOpacity } from 'react-native'
import Icon from 'react-native-vector-icons/MaterialIcons';
import FontAwesome from 'react-native-vector-icons/FontAwesome';
import { MyColor, MyStyle } from '../../../style'

function SignInScreen({navigation}) {
    return (
        <SafeAreaView style={{ paddingHorizontal: 20, flex: 1, backgroundColor: MyColor.background }}>
            <StatusBar hidden={true} />
            <ScrollView showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>
                <View style={{ flexDirection: 'row', marginTop: 15 }}>
                    <Text style={{ fontWeight: 'bold', fontSize: 50, color: MyColor.softGray }}>
                        Si
                    </Text>
                    <Text style={{ fontWeight: 'bold', fontSize: 50, color: MyColor.yellow }}>
                        Anu
                    </Text>
                </View>
                <View style={{ marginTop: 50 }}>
                    <Text style={{ fontWeight: 'bold', fontSize: 27, color: MyColor.light }}>
                        Selamat Datang Kembali
                    </Text>
                    <Text style={{ fontSize: 16, color: MyColor.softGray }}>
                        Silahkan login untuk melanjutkan
                    </Text>
                </View>
                <View style={{ marginTop: 30 }}>
                    <View style={MyStyle.inputContainer}>
                        <Icon
                            name="person-outline"
                            size={25}
                            color={MyColor.purple}
                            style={MyStyle.inputIcon}>
                        </Icon>
                        <TextInput
                            placeholder="Username"
                            style={MyStyle.input}>

                        </TextInput>
                    </View>
                    <View style={MyStyle.inputContainer}>
                        <Icon
                            name="lock-outline"
                            size={25}
                            color={MyColor.purple}
                            style={MyStyle.inputIcon}>
                        </Icon>
                        <TextInput
                            placeholder="Password"
                            style={MyStyle.input}
                            secureTextEntry>
                        </TextInput>
                    </View>
                    <TouchableOpacity style={MyStyle.btnPrimary}>
                        <Text style={{ color: MyColor.white, fontWeight: 'bold', fontSize: 18 }}>
                            LOGIN
                        </Text>
                    </TouchableOpacity>
                    <View style={{ marginVertical: 50, flexDirection: 'row', justifyContent: 'center', alignItems: 'center' }}>
                        <View style={MyStyle.line}></View>
                        <Text style={{ fontWeight: 'bold', marginHorizontal: 5, color: MyColor.softGray }}>
                            Atau
                        </Text>
                        <View style={MyStyle.line} />
                    </View>
                    <View style={{ flexDirection: 'row', justifyContent: 'space-between' }}>
                        <TouchableOpacity style={MyStyle.btnSecondary}>
                            <Text style={{}}>
                                Login dengan
                            </Text>
                            <FontAwesome name={'facebook'} style={{ color: MyColor.blue, fontSize: 20, marginLeft: 5 }} />
                        </TouchableOpacity>
                        <View style={{ width: 10, }}></View>
                        <TouchableOpacity style={MyStyle.btnSecondary}>
                            <Text style={{}}>
                                Login dengan
                            </Text>
                            <FontAwesome name={'google'} style={{ color: MyColor.red, fontSize: 20, marginLeft: 5 }} />
                        </TouchableOpacity>
                    </View>
                    <View style={{ flexDirection: 'row', marginBottom: 15, marginTop: 30, alignItem: 'flex-end', justifyContent: 'center' }}>
                        <Text style={{ fontWeight: 'bold', fontSize: 16, color: MyColor.softGray }}>
                            Belum punya akun ?{" "}
                        </Text>

                        <TouchableOpacity onPress={()=>navigation.navigate('SignUpScreen')} >
                            <Text style={{ fontWeight: 'bold', fontSize: 16, color: MyColor.cream }}>
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