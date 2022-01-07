import { StyleSheet, TextInput, View } from 'react-native';
import React from 'react'
import { MyColor, MyStyle } from '../../../style';
import Icon from 'react-native-vector-icons/MaterialIcons';

const Input = ({ placeholder, secureTextEntry, iconName, ...rest }) => {
    return (

        <View style={style.inputContainer}>
            <View style={style.iconContainer}>

            <Icon
                name={iconName}               
                size={25}               
                color={MyColor.purple}
               >
            </Icon>
            </View>

            <TextInput
                placeholder={placeholder}            
                style={style.inputText}
                secureTextEntry={secureTextEntry}
                {...rest}
            />
        </View>
    )
}

const style = StyleSheet.create({

    inputContainer: {
        flexDirection: 'row',
        marginTop: 25,
        backgroundColor: MyColor.light,
        borderRadius: 20,
        alignItem: 'center',
    },
    iconContainer: { 
   justifyContent:'center',
   padding:10,
    },
    inputText: {
        color: MyColor.gray,
        paddingLeft: 20,
        flex: 1,
        fontSize: 16,
    },
});

export default Input;
