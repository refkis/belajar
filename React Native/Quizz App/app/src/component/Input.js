import { StyleSheet, TextInput, View } from 'react-native';
import myColor from '../../style/myColor';
import React from 'react'

const Input = ({value, setValue, placeholder ,secureTextEntry}) => {
    return (

        <View style={style.inputContainer}>
            <TextInput
                value={value}
                onChangeText={setValue}
                placeholder={placeholder} 
                style={style.textInput}
                secureTextEntry={secureTextEntry}
            />
        </View>
    )
}

const style = StyleSheet.create({

    inputContainer: {
        backgroundColor: myColor.white,
        elevation: 40,
        width: '100%',
        marginVertical: 10,      
        borderRadius: 30,
        alignItems: 'center',
        padding:10,
    },
    textInput: {
        paddingHorizontal: 5,
        alignItems: 'center',
        justifyContent:'center',
    },
});

export default Input;
