import React from 'react';
import { SafeAreaView, ScrollView, StatusBar, StyleSheet, Text } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import Navigasi from './src/navigasi';
import { Provider } from 'react-redux';
import { store } from './src/redux';


const App = () => {
  return (
    <Provider store={store}>
      <NavigationContainer>
        <Navigasi />
      </NavigationContainer>
    </Provider>
  )
}
export default App