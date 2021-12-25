import React from 'react'
import myColor from '../../../style/myColor'
import myStyle from '../../../style/myStyle'
import Icon from 'react-native-vector-icons/MaterialIcons';
import FontAwesome from 'react-native-vector-icons/FontAwesome';
import { View, Text, StatusBar,TextInput,ScrollView, SafeAreaView,TouchableOpacity} from 'react-native'

function SignUpScreen() {
    return (
        <SafeAreaView style={{ paddingHorizontal: 20, flex: 1, backgroundColor: myColor.background }}>
            <StatusBar hidden={true} />
            <ScrollView showsHorizontalScrollIndicator={false} showsVerticalScrollIndicator={false}>

                {/* HEADER */}
                <View style={{ flexDirection: 'row', marginTop: 15 }}>
                    <Text style={{ fontWeight: 'bold', fontSize: 50, color: myColor.softGray }}>
                        Si
                    </Text>
                    <Text style={{ fontWeight: 'bold', fontSize: 50, color: myColor.yellow }}>
                        Cerdas
                    </Text>
                </View>

                {/* JUDUL */}
                <View style={{ marginTop: 40 }}>
                    <Text style={{ fontWeight: 'bold', fontSize: 27, color: myColor.light }}>
                        Ayo bergabung bersama kami
                    </Text>
                    <Text style={{ fontSize: 16, color: myColor.softGray }}>
                        Silahkan isi anda data dengan benar
                    </Text>
                </View>

                {/* BODY */}
                <View style={{ marginTop: 30 }}>

                    {/* INPUT GROUP */}
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
                            name="mail-outline"
                            size={25}
                            color={myColor.purple}
                            style={myStyle.inputIcon}>
                        </Icon>
                        <TextInput
                            placeholder="Email"
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
                    <View style={myStyle.inputContainer}>
                        <Icon
                            name="lock-outline"
                            size={25}
                            color={myColor.purple}
                            style={myStyle.inputIcon}>
                        </Icon>
                        <TextInput
                            placeholder="Confirm Password"
                            style={myStyle.input}
                            secureTextEntry>
                        </TextInput>
                    </View>

                    {/* PRIMARY BUTTON */}
                    <TouchableOpacity style={myStyle.btnPrimary}>
                        <Text style={{ color: myColor.white, fontWeight: 'bold', fontSize: 18 }}>
                            DAFTAR
                        </Text>
                    </TouchableOpacity>

                    <View style={{ marginVertical: 30, flexDirection: 'row', justifyContent: 'center', alignItems: 'center' }}>
                        <View style={myStyle.line}></View>
                        <Text style={{ fontWeight: 'bold', marginHorizontal: 5, color: myColor.softGray }}>
                            Atau
                        </Text>
                        <View style={myStyle.line} />
                    </View>

                    {/* SECONDARY BUTTON */}
                    <View style={{ flexDirection: 'row', justifyContent: 'space-between' }}>

                        {/* FACEBOOK BUTTON */}
                        <TouchableOpacity style={myStyle.btnSecondary}>
                            <Text style={{}}>
                                Login dengan
                            </Text>
                            <FontAwesome name={'facebook'} style={{ color: myColor.blue, fontSize: 20, marginLeft: 5 }} />
                        </TouchableOpacity>
                        <View style={{ width: 10, }}></View>

                        {/* GOOGLE BUTTON */}
                        <TouchableOpacity style={myStyle.btnSecondary}>
                            <Text style={{}}>
                                Login dengan
                            </Text>
                            <FontAwesome name={'google'} style={{ color: myColor.red, fontSize: 20, marginLeft: 5 }} />
                        </TouchableOpacity>
                    </View>

                    {/* BOTTOM NAVIGATION  */}
                    <View style={{ flexDirection: 'row', marginBottom: 15, marginTop: 30, alignItem: 'flex-end', justifyContent: 'center' }}>
                        <Text style={{ fontWeight: 'bold', fontSize: 16, color: myColor.softGray }}>
                            Sudah punya akun ?{" "}
                        </Text>

                        {/* LINK TO LOGIN*/}
                        <TouchableOpacity >
                            <Text style={{ fontWeight: 'bold', fontSize: 16, color: myColor.cream }}>
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