import csv
# import serial
# import time

# arduino = serial.Serial(port='COM6', baudrate=9600, timeout=.1)

# def sendData(r,g,b):
#     rList = [r, g, b, r, g, b,r, g, b,r, g, b,r, g, b,r, g, b,r, g, b]
#     arr = bytes(rList)
#     arduino.write(arr)
#     data = arduino.readline()
#     return data

# # with open('colors.csv') as csv_file:
# #     csv_reader = csv.reader(csv_file, delimiter=',')
# #     for row in csv_reader:
# #         red = int(row[0])
# #         green = int(row[1])
# #         blue = int(row[2])
# red=0
# blue=255
# green =100
# while True:
#     print(red, green, blue)
#     output = sendData(red,green,blue)
#     print(output)

# Importing Libraries
import serial
import time
arduino = serial.Serial(port='COM6', baudrate=9600, timeout=.1)


def sendData(r,g,b):
    rList = [r, g, b, r, g, b,r, g, b,r, g, b,r, g, b,r, g, b,r, g, b]
    arr = bytes(rList)
    arduino.write(arr)
    data = arduino.readline()
    return data

def getValues():
  with open('colors.csv') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    for row in csv_reader:
        red = int(row[0])
        green = int(row[1])
        blue = int(row[2])

  output = sendData(red,green,blue)

def showSpectrum():
    getValues()
    time.sleep(1)

while True:
    showSpectrum()