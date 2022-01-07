import React, {useEffect} from 'react'
import { Text, View } from 'react-native'


const SplashScreen = ({navigation}) => {
    // console.log(navigation.replace)
    useEffect(() => {
        setTimeout(() => {
            navigation.replace('WelcomeScreen')
        }, 2000)
    })
    return (
        <View>
            <Text>
                Splash Screen
            </Text>
        </View>
    )
}
export default SplashScreen