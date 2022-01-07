import { StyleSheet } from 'react-native';
import MyColor from '../color';

const MyStyle = StyleSheet.create({
  inputContainer: {
    flexDirection: 'row',
    marginTop: 25,
    backgroundColor: MyColor.light,
    borderRadius: 8,
    alignItem: 'center'
  },
  inputIcon: {
    
    marginLeft: 10,
    alignSelf: 'flex-start',
  },
  input: {
    color: MyColor.gray,
    paddingLeft: 20,
    flex: 1,
    fontSize: 16,
  },

  btnPrimary: {
    backgroundColor: MyColor.primary,
    height: 50,
    marginTop: 40,
    justifyContent: 'center',
    alignItems: 'center',
    borderRadius: 8,
  },
  btnSecondary: {
    height: 50,
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: MyColor.softGray,
    borderRadius: 5,
    flexDirection: 'row'
  },
  line: {
    height: 1,
    width: 50,
    margin: 10,
    backgroundColor: MyColor.softGray,
  },
  bodyWarp: {
    flex: 1,
    alignItems: 'center',
    backgroundColor: MyColor.light,
    padding: 20,
  },
  contentWarp: {
    flex: 1,
    alignItems: 'center',
    margin: 5,
  },
  logo: {
    width: '80%',
    maxWidth: 300,
  },
  label: {
    fontWeight: 'bold',
    fontSize: 20,
    color: 'black'
  },
  actionIcon: {
    height: 25,
    width: 25,
    backgroundColor: 'green',
    justifyContent: 'center',
    alignItems: 'center',
    marginLeft: 5,
    borderRadius: 3,
  },
  listItem: {
    padding: 20,
    backgroundColor: MyColor.white,
    flexDirection: 'row',
    elevation: 12,
    borderRadius: 7,
    marginVertical: 10,
  },
  header: {
    padding: 20,
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'space-between',
  },
  footer: {
    position: 'absolute',
    bottom: 0,
    color: MyColor.white,
    width: '100%',
    flexDirection: 'row',
    alignItems: 'center',
    paddingHorizontal: 20,
  },

  iconContainer: {
    height: 50,
    width: 50,
    backgroundColor: MyColor.primary,
    borderRadius: 25,
    elevation: 40,
    justifyContent: 'center',
    alignItems: 'center',
  }
});

export default MyStyle;
