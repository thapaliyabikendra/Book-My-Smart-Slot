#include <ESP8266WiFi.h>
#include<Wire.h>
#include<LiquidCrystal_I2C.h>
#include<Servo.h>
LiquidCrystal_I2C lcd(0x3f,2,1,0,4,5,6,7,3,POSITIVE);
const char* ssid  = "naveenm";
const char* password = "naveen1987";
const char* host = "10.0.0.19";
const int IR0=D0;
const int IR1=D1;
const int IR2=D2;
const int IR3=D3;
const int SPIN=D4;
long state0;
long state1;
long state2;
long state3;
String response;
String slot;
Servo servo;
WiFiClient client;
 //RFID TAG!=2700228CD851
 //RFID TAG!=270021E8628C
 //RFID TAG!=270021E4E200
void setup() {
 Serial.begin(9600);
 delay(10);
 Wire.begin(D5,D6);
 lcd.begin(16,2);
 lcd.clear();
 pinMode(IR0,INPUT);
 pinMode(IR1,INPUT);
 pinMode(IR2,INPUT);
 pinMode(IR3,INPUT);
 servo.attach(SPIN);
 Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
    delay(5000);
}
void loop() {  
  response="";
  lcd.clear();
         if (Serial.available())  {
      response = Serial.readStringUntil('\n');
      Serial.println(response);
  }
        if(response=="2700228CD851"){
    Serial.println("ACCESS GRANTED");    
  state0=digitalRead(IR0);
  state1=digitalRead(IR1);
  state2=digitalRead(IR2);
  state3=digitalRead(IR3);
if(state0==HIGH||state1==HIGH||state2==HIGH||state3==HIGH){
  if(state0==HIGH){
     Serial.println("Slot 1");
     lcd.print("Slot 1");
     slot="1";
  }
  else if(state1==HIGH){
     Serial.println("Slot 2");
     lcd.print("Slot 2");
     slot="2";
    }
    else  if(state2==HIGH){
     Serial.println("Slot 3");
     lcd.print("Slot 3");
     slot="3";
  }
  else if(state3==HIGH){
     Serial.println("Slot 4");
     lcd.print("Slot 4");
     slot="4";
    }
  Serial.println("Available");
   delay(1000);
  lcd.setCursor(0,1);
  lcd.print("Available");
  delay(1000);
  servo.write(0);
  delay(1000);
  servo.write(180);
  delay(1000);
  // Connect to host
  Serial.print("Connecting to ");
  Serial.println(host);
  // Use WiFiClient class to create TCP connections
  const int httpPort = 8080;
  if (!client.connect(host, httpPort)) {
    Serial.println("Connection failed!");
    return;
  }
  // Create a URL for the request.
  String url = "/nodemcu/dashboard/index.php?s0=";
  url += state0;
  url += "&s1=";
  url += state1;
  url += "&s2=";
  url += state2;
  url += "&s3=";
  url += state3;
  url += "&tag=";
  url += response;
  url += "&slot=";
  url += slot;
  // This will send the request to the server
  Serial.print("Requesting URL: ");
  Serial.println(url);
  client.print(String("GET ") + url + " HTTP/1.1\r\n" + "Host: " + host + "\r\n" + "Connection: close\r\n\r\n");
   while (client.available()) {
    String line = client.readStringUntil('\r');
    Serial.print(line);
  } 
  Serial.println();
  Serial.println("Closing connection");
  }
else {
  Serial.println("Slot Not Available");
   lcd.print("Slot Not Available");
   delay(1000);
return;
}
      }
    else if(response=="270021E8628C"||response=="270021E4E200"){
         Serial.println("Card not valid");
         lcd.print("Card not valid");
          delay(1000);
               }
 delay(1000);
      }

