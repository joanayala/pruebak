#Coins
#Programa para imprimir el cambio en monedas determinadas
#Monedas de cambio: $100, $50, $25, $10, $5, $1
#Version Python: 3.7.0

monedas_cambio = [1, 5, 10, 25, 50, 100]
acum = 0
flagMoneda = 0

#FUNCTIONS########################################################
#Función para imprimir las monedas de acuerdo al total obtenido
#       de cada denominación de moneda.
def print_coins(x,y) :
    i = 1
    while i <= x :
        print (y)
        i=i+1

#Función para hacer la comparativa del patrón y obtener las
#        denominaciones de los cambios a generar.
def comparar_patron (moneda):
    if moneda in monedas_cambio:
        denominacion = moneda
    elif moneda > monedas_cambio[0] and moneda < monedas_cambio[-1]:
        for x in range(0, len(monedas_cambio)):
            if monedas_cambio[x] < moneda and moneda < monedas_cambio[x + 1]:
                denominacion = monedas_cambio[x]
                break
    else:
        denominacion = monedas_cambio[-1]

    return denominacion

def calcular(moneda, denominacion):
    global acum
    coin = int(moneda / denominacion)
    moneda = moneda % denominacion
    acum = acum + (coin * denominacion)
    print_coins(coin, denominacion)
    return moneda

#MAIN#############################################################
monedaIn = int(input("Ingrese el valor del cambio: $"))
flagMoneda = monedaIn

while acum != monedaIn:
    denominacion = comparar_patron(flagMoneda)
    flagMoneda = calcular(flagMoneda, denominacion)







