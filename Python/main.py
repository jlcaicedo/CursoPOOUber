from car import Car
from account import Account

if __name__ == "__main__":

    car1 = Car("GHD234", Account("Valtteri Bottas", "DFE214"))
    print(vars(car1))
    print(vars(car1.driver))

    car2 = Car("FTY344", Account("Lewis Hamilton", "GHXV23452"))
    print(vars(car2))
    print(vars(car2.driver))