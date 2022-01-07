import * as React from 'react';
import { createStackNavigator } from '@react-navigation/stack';
import { SignInScreen, SignUpScreen, SplashScreen, WelcomeScreen } from '../screens';

const Stack = createStackNavigator();

const Navigasi = () => {
    return (
        <Stack.Navigator>
            <Stack.Screen name="SignUpScreen" 
            component={SignUpScreen} 
            options={{ headerShown :false }}  />
            <Stack.Screen name="SplashScreen" 
            component={SplashScreen} 
            options={{ headerShown :false }}  />
            <Stack.Screen name="SignInScreen" 
            component={SignInScreen} 
            options={{ headerShown :false }}  />
            <Stack.Screen name="WelcomeScreen" 
            component={WelcomeScreen} 
            options={{ headerShown :false }} />
        </Stack.Navigator>
    );
}

export default Navigasi;