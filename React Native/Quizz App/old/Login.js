import React from 'react';
import { Text, View } from 'react-native';
import Input from './src/component/Input';
import myStyle from './style/myStyle';

const Login = () => {
    return (
        <View style={myStyle.bodyWarp}>
            <View style={myStyle.contentWarp}>
                <Text style={myStyle.label}>Form Login oi</Text>
                <Input name="Masukan Username" />
                <Input name="Masukan Password" />
            </View>
        </View>
    )
}

export default Login;
