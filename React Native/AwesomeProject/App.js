import React, { Component } from 'react';
import {Text,View} from 'react-native';

class App extends Component {
  constructor(props) {
    super(props);
    this.state = {  };
  }
  render() {
    return (
      <View>
          <Text style={{ 
            fontWeight:'bold', 
            color:'crimson',
            fontSize:50,
            textAlign:'center' 
            }}> Halo Dunia</Text>
     
          <Text style={{ 
            
            fontSize:50,
            textAlign:'center',            
            }}> Dunia : 
              <Text style={{ 
                color:'blue', 
                fontSize:50,
                textAlign:'center',
                fontStyle:'italic' 
                }}> Halo Juga</Text>
            </Text>
      </View>  
    );
  }
}

export default App;