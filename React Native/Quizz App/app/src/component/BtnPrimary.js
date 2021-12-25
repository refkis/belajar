import React from 'react'
import { Text,  StyleSheet, Pressable } from 'react-native'
import myColor from '../../style/myColor'


const BtnPrimary = ({onPress,text, type}) => {
    return (
        <Pressable 
        onPress={onPress}

        style={[style.container, style[`container_btn_${type}`]]} >
                <Text style={style.text}>{text}</Text>
          
        </Pressable>
    )
}
const style = StyleSheet.create({
    container: {
        
        width: '100%',
        padding: 15,
        margin: 10,
        justifyContent: 'center',
        alignItems: 'center',
        borderRadius:10,
        
    },
    container_btn_primary: {
        backgroundColor: myColor.primary,
    },
    container_btn_secondary: {
        backgroundColor: myColor.softGray,
    
    },
    text : {
        fontWeight: 'bold',
        color: myColor.white,
        fontSize: 18,
    }

  
})
export default BtnPrimary
