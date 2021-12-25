import React from 'react';
import { View, Text, SafeAreaView, StyleSheet, TextInput, TouchableOpacity, FlatList } from 'react-native';
import Icon from 'react-native-vector-icons/MaterialIcons';
import myStyle from './style/myStyle';
import myColor from './style/myColor';


const Todo = () => {
  const [todos, setTodos] = React.useState([
    { id: 1, task: "Belajar", completed: true },
    { id: 2, task: "Begadang", completed: true },
    { id: 3, task: "Ngopi", completed: true },
    { id: 4, task: "Lanjut Tidur", completed: false },
  ]);

  const ListItem = ({ todo }) => {
    return (
      <View style={myStyle.listItem}>
        <View style={{ flex: 1 }}>
          <Text style={{
            fontWeight: 'bold',
            fontSize: 15,
            color: todo?.completed ? 'grey' : 'brown',
            textDecorationLine: todo?.completed ? 'line-through' : 'none',
          }}>
            {todo?.task}
          </Text>
        </View>
        {!todo?.completed && (
          <TouchableOpacity style={myStyle.actionIcon}>
          <Icon name="done" size={20} color={myColor.white} />
        </TouchableOpacity>
        )}
        <TouchableOpacity style={[myStyle.actionIcon, { backgroundColor: "red" }]}>
              <Icon name="delete" size={20} color={myColor.white} />
            </TouchableOpacity>
        
      </View>
    );
  };
  return (
    <SafeAreaView style={{ flex: 1, backgroundColor: myColor.white }}>
      <View style={myStyle.header}>
        <Text style={{ fontWeight: 'bold', fontSize: 20,color: 'black' }}>
          KEGIATAN HARI INI
        </Text>
        <Icon name="info" size={50} color="grey" />
      </View>
      <FlatList
        showVerticalScrollIndicator={false}
        contentContainerStyle={{ padding: 20, paddingBottom: 100 }}
        data={todos}
        renderItem={({ item }) => <ListItem todo={item} />}
      />
      <View style={myStyle.footer}>
        <View style={myStyle.inputContainer}>
          <TextInput placeholder="Tambah Kegiatan" style={myStyle.textInput} />
        </View>
        <TouchableOpacity>
          <View style={myStyle.iconContainer}>
            <Icon name="add" color={myColor.white} size={30} />
          </View>
        </TouchableOpacity>
      </View>
    </SafeAreaView>
  );
};



export default Todo;
