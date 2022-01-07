import React, { useEffect } from 'react'
import { StyleSheet, Text, TouchableOpacity, View } from 'react-native'
import { DigitalSvg } from '../../../assets'
import { MyColor } from '../../../style'
const Button = ({ label, title, onPress }) => {
    return (
        <View style={{ marginBottom: 20, alignItems:'center' }}>
            <Text>
                {label}
            </Text>
            <TouchableOpacity style={styles.button} onPress={onPress}>
                <Text style={styles.labelText}>
                    {title}
                </Text>
            </TouchableOpacity>
        </View>
    )
}


const WelcomeScreen = ({navigation}) => {
    const clickLogin = (screen) => { 
            
            navigation.navigate(screen)       
        }
    
    return (
        <View>
            <DigitalSvg width={'50%'} height={'50%'} alignSelf={'center'} />
            <Button label='Sudah punya akun ?' title='Login Disini' onPress={()=>clickLogin('SignInScreen')} />
            <Button label='--- atau ---' title='Daftar Disini' onPress={()=>clickLogin('SignUpScreen')} />
        </View>
    )
}

const styles = StyleSheet.create({
    button: {
        backgroundColor: MyColor.primary,
        borderColor: MyColor.secondary,
        borderWidth: 3,
        borderRadius: 15,
        paddingVertical: 12,
        
      
    },
    label: {
        fontWeight: 'bold',
        fontSize: 14,
        alignSelf: 'center',
        marginVertical:12,
        marginBottom:10,
    },
    labelText: {
        color: MyColor.white,
        fontWeight: 'bold',
        fontSize: 18,
        alignSelf: 'center',
        paddingHorizontal:12,
    }
})
export default WelcomeScreen