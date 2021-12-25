import React, { useState, useEffect } from 'react'
import { StyleSheet, ScrollView, Text, View } from 'react-native'


const Kognitif = () => { 

   const [data, setData] =useState()

    useEffect(() => {
        fetch('http://10.0.2.2:8000/api/soal/kognitif')
            .then(response => response.json())
            .then(data => setData(data))
        
    }, [])
    console.log(data)
     return (
         <View style={style.container}>
             <ScrollView >
                <View>
                {!data ? <Text>Waiting</Text> : data.map(kognitif =>(
                    <Text key={kognitif.id_soal}>{kognitif.id_soal}. {kognitif.bidang}</Text>
                ))}
                </View>            
            </ScrollView>
         </View>
            
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
})
   
export default Kognitif
