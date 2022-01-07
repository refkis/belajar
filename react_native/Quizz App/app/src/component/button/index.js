import React from 'react'
import { Text, StyleSheet, TouchableOpacity } from 'react-native'
import { MyColor } from '../../../style'

const Button = ({ onPress, buttonTitle, buttonType }) => {
    return (
        <TouchableOpacity
            onPress={onPress}
            style={[style.container, style[`container_btn_${buttonType}`]]} >
            <Text style={style.buttonTitle}>{buttonTitle}</Text>

        </TouchableOpacity>
    )
}
const style = StyleSheet.create({
    container: {
        padding: 15,
        margin: 10,
        justifyContent: 'center',
        alignItems: 'center',
        borderRadius: 10,

    },
    container_btn_primary: {
        backgroundColor: MyColor.primary,
    },
    container_btn_secondary: {
        backgroundColor: MyColor.softGray,

    },
    buttonTitle: {
        fontWeight: 'bold',
        color: MyColor.white,
        fontSize: 18,
    }


})
export default Button
