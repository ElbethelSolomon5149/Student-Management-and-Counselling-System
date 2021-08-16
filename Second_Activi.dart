import 'package:flutter/material.dart';
import 'screens/home_screen.dart';

void main() => runApp(SecondActivi());
class SecondActivi extends StatelessWidget{
  @override
  Widget build (BuildContext context){
    return MaterialApp(
      title: 'Login Activity',
      theme: ThemeData(
        primaryColor: Color.blue,
      ),
      home: HomeScreen(),
    );
  }
}
