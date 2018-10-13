
#include <EtherCard.h>

static byte myip[] = { 192,168,1,5 };
static byte gwip[] = { 192,168,1,1 };
static byte mymac[] = { 0x74,0x69,0x69,0x2D,0x30,0x31 };

byte Ethernet::buffer[700];
static uint32_t timer;
Stash stash;

const char website[] PROGMEM = "192.168.1.1";

static int TRGPIN[] = {4,6};
static int ECHPIN[] = {5,7};

int slot[] = {0,0};
int validator[] = {0,0};



void update_serial(){

  Serial.println();
  Serial.println("[UPDATE SLOTS]");
  Serial.print("[ ");
  Serial.print(slot[0]);
  Serial.print(" ]");
  Serial.print(" [ ");
  Serial.print(slot[1]);
  Serial.println(" ]");

}

void mobil_masuk(int s){
  
  slot[s] = 1;
  
  byte sd = stash.create();
    stash.print("slot=");
    stash.print(s+1);
    stash.save();

    Stash::prepare(PSTR("POST http://$F/smartpark/index.php/crud/start HTTP/1.0" "\r\n"
                        "Host: $F" "\r\n"
                        "Content-Length: $D" "\r\n"
                        "Content-Type: application/x-www-form-urlencoded \r\n"
                        "\r\n"
                        "$H"),
            website, website, stash.size(), sd);

    ether.tcpSend();
    
    update_serial();  
    
}

void mobil_keluar(int s){
  
  slot[s] = 0;
  
  byte sd = stash.create();
    stash.print("slot=");
    stash.print(s+1);
    stash.save();

    Stash::prepare(PSTR("POST http://$F/smartpark/index.php/crud/away HTTP/1.0" "\r\n"
                        "Host: $F" "\r\n"
                        "Content-Length: $D" "\r\n"
                        "Content-Type: application/x-www-form-urlencoded \r\n"
                        "\r\n"
                        "$H"),
            website, website, stash.size(), sd);

    ether.tcpSend();
    
    update_serial(); 
    
}

void setup(){
  
  Serial.begin(9600);
  Serial.println("Starting Service");
  Serial.println();
  
  pinMode(TRGPIN[0], OUTPUT);
  pinMode(ECHPIN[0], INPUT);
  pinMode(TRGPIN[1], OUTPUT);
  pinMode(ECHPIN[1], INPUT);
  
  if (ether.begin(sizeof Ethernet::buffer, mymac) == 0) {
    
    Serial.println( "Failed to access Ethernet controller");
    
  }

  ether.staticSetup(myip, gwip);
  
  ether.printIp("IP Address : ", ether.myip);
  ether.printIp("Gateway IP : ", ether.gwip);

  ether.hisip[0] = 192;
  ether.hisip[1] = 168;
  ether.hisip[2] = 1;
  ether.hisip[3] = 1;
  
  ether.printIp("Server IP : ", ether.hisip);
  
  Serial.println();
  Serial.println("-------------------------------------");
  
}

void loop(){
  
  double duration[] = {0,0};
  double range[] = {0,100};
 
  ether.packetLoop(ether.packetReceive());

  if (millis() > timer){
    timer = millis() + 100;
    
    //slot1
    digitalWrite(TRGPIN[0], LOW);
    delayMicroseconds(2);
    digitalWrite(TRGPIN[0], HIGH);
    delayMicroseconds(10);
    digitalWrite(TRGPIN[0], LOW);
    
    //slot2
//    digitalWrite(TRGPIN[1], LOW);
//    delayMicroseconds(2);
//    digitalWrite(TRGPIN[1], HIGH);
//    delayMicroseconds(10);
//    digitalWrite(TRGPIN[1], LOW);

    //slot1
    duration[0] = pulseIn(ECHPIN[0], HIGH);
    range[0] = duration[0] / 29.1 / 2;
    
    //slot2
//    duration[1] = pulseIn(ECHPIN[1], HIGH);
//    range[1] = duration[1] / 29.1 / 2;
   
    
    for (int i = 0; i < 2; i++){
      if(range[i] <= 70 && slot[i] == 0){
        validator[i]++;
         if (validator[i] >= 30) {
            mobil_masuk(i);
         }
      } 
      else if(range[i] > 70 && slot[i] == 0){
        validator[i] = 0;
      }
      else if(range[i] > 70 && slot[i] == 1){
        mobil_keluar(i);
      }
    }
  }    
    
}
