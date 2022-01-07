import React, { useState } from 'react'
import Icon from 'react-native-vector-icons/MaterialIcons';
import FontAwesome from 'react-native-vector-icons/FontAwesome';
import { View, Text, StatusBar, ScrollView, SafeAreaView, TouchableOpacity, Alert } from 'react-native'
import { MyColor, MyStyle } from '../../../style';
import { Input } from '../../component'
import { useDispatch, useSelector } from 'react-redux';
import { setForm } from '../../redux';

function SignUpScreen({ navigation }) {
    const {form} = useSelector(state => state.registerReducer)

    const dispatch = useDispatch()
  
    const onChange = (value, inputFrom) => {
   
        dispatch(setForm(inputFrom,value))
    }
    const sentData = () => {
        console.log('send data', form)
    }



    return (
        <SafeAreaView style={{ paddingHorizontal: 20, flex: 1, backgroundColor: MyColor.background }}>
            <StatusBar hidden={true} />
            <ScrollView showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>

                {/* HEADER */}
                <View style={{ flexDirection: 'row', marginTop: 15 }}>
                    <Text style={{ fontWeight: 'bold', fontSize: 50, color: MyColor.softGray }}>
                        Si
                    </Text>
                    <Text style={{ fontWeight: 'bold', fontSize: 50, color: MyColor.yellow }}>
                        Anu
                    </Text>

                </View>

                {/* JUDUL */}
                <View style={{ marginTop: 40 }}>
                    <Text style={{ fontWeight: 'bold', fontSize: 27, color: MyColor.light }}>
                       Ayo bergabung bersama Kami
                    </Text>
                    <Text style={{ fontSize: 16, color: MyColor.softGray }}>
                        silahkan isi data anda dengan benar
                    </Text>
                </View>

                {/* BODY */}
                <View style={{ marginTop: 30 }}>

                    {/* INPUT GROUP */}

                    <Input
                        iconName="person-outline"
                        placeholder="Username"
                        value={form.username}
                        onChangeText={(value) => onChange(value, 'username')}
                    />
                    <Input
                        iconName="mail-outline"
                        placeholder="email"
                        value={form.email}
                        onChangeText={(value) => onChange(value, 'email')}
                    />
                    <Input
                        iconName="lock-outline"
                        placeholder="password"
                        secureTextEntry
                        value={form.password}
                        onChangeText={(value) => onChange(value, 'password')}
                    />

                    <Input
                        iconName="lock-outline"
                        placeholder="confirm password"
                        value={form.confirmPassword}
                        secureTextEntry
                        onChangeText={(value) => onChange(value, 'confirmPassword')}
                    />



                    {/* PRIMARY BUTTON */}
                    <TouchableOpacity style={MyStyle.btnPrimary} onPress={() => sentData()}>
                        <Text style={{ color: MyColor.white, fontWeight: 'bold', fontSize: 18 }}>
                            DAFTAR
                        </Text>
                    </TouchableOpacity>

                    <View style={{ marginVertical: 30, flexDirection: 'row', justifyContent: 'center', alignItems: 'center' }}>
                        <View style={MyStyle.line}></View>
                        <Text style={{ fontWeight: 'bold', marginHorizontal: 5, color: MyColor.softGray }}>
                            Atau
                        </Text>
                        <View style={MyStyle.line} />
                    </View>

                    {/* SECONDARY BUTTON */}
                    <View style={{ flexDirection: 'row', justifyContent: 'space-between' }}>

                        {/* FACEBOOK BUTTON */}
                        <TouchableOpacity style={MyStyle.btnSecondary}>
                            <Text style={{}}>
                                Login dengan
                            </Text>
                            <FontAwesome name={'facebook'} style={{ color: MyColor.blue, fontSize: 20, marginLeft: 5 }} />
                        </TouchableOpacity>
                        <View style={{ width: 10, }}></View>

                        {/* GOOGLE BUTTON */}
                        <TouchableOpacity style={MyStyle.btnSecondary}>
                            <Text style={{}}>
                                Login dengan
                            </Text>
                            <FontAwesome name={'google'} style={{ color: MyColor.red, fontSize: 20, marginLeft: 5 }} />
                        </TouchableOpacity>
                    </View>

                    {/* BOTTOM NAVIGATION  */}
                    <View style={{ flexDirection: 'row', marginBottom: 15, marginTop: 30, alignItem: 'flex-end', justifyContent: 'center' }}>
                        <Text style={{ fontWeight: 'bold', fontSize: 16, color: MyColor.softGray }}>
                            Sudah punya akun ?{" "}
                        </Text>

                        {/* LINK TO LOGIN*/}
                        <TouchableOpacity onPress={() => navigation.navigate('SignInScreen')}>
                            <Text style={{ fontWeight: 'bold', fontSize: 16, color: MyColor.cream }}>
                                Login disini
                            </Text>
                        </TouchableOpacity>
                    </View>
                </View>
            </ScrollView>
        </SafeAreaView>
    )
}
export default SignUpScreen