import 'package:flutter/material.dart';

class LoginActive StatefulWidget{
  @override
  _LoginActiveState createState()=>_LoginActiveState();
}
class _LoginActiveState extends State<LoginActive>{
  final GlobalKey<FormState> _formKey = GlobalKey();


  void _submit()
  {

  }
  @override
  Widgett build(BuildContext context){
    return Scalfold(
      appBar:AppBar(
        title:Text('Login'),
      ),
      body:Stack(
        childeren: <Widget>[
          Container(
            decoration:BoxDecoration(
              gradient: Lineargradient(
                Colors:[
                  Colors.lightGreenAccendent,
                  Colors.blue,
                ]
              )
            ),
          ),
          Center(
            child:Card(
              shape: RoundRectangleBorder(
                borderRadius:BorderRadius.circular(10,0),
              ),
              child:Container(
                hieght:260,
                width:300,
                padding:EdgeInserts.all(16),
                child: Form(
                  key: _formKey,
                  child: SingleChildScrollView(
                    child:Column[
                      childeren:<Widget>[
                        TextFormFeild(
                          decoration:InputDecoration(labelText:Email),
                          keyBoardType:TextInputType.emailAddress,
                          Validator:(value){

                            if(value,isempty || value.contains('@'))
                            {
                              return 'invalid email';
                            }
                            return null;
                          },
                          onSaved:(value)
                          {

                          },
                        ),
                        TextFormField(
                          decoration:InputDecoration(labelText:'Password'),
                          obscureText:true,
                          validator:(value)
                          {
                            if(value.isEmpty || value.length<=5)
                            {
                              return 'invalid password';
                            }
                            return null;
                          },
                          onSaved:(value)
                          {

                          }, 
                        ),
                        SizedBox(
                          height:30,

                        ),
                        RaisedButton(
                          child: Text(
                            'Login'
                          ),
                          onPressed:()
                          {
                            _submit();
                          },
                          shape:RoundedRectangleBorder(
                            borderRadius: BorderRadius.circular(30),                           )
                        ),
                        color:Colors.blue,
                        TextColor:Colors.white,
                      ],
                    ],
                  ),
                ),
              ),
            ),
          )
        ],
      ),
    )
  }
}
