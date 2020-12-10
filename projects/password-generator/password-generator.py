import random

lower = "abcdefghijklmnopqrstuvwxyz"
upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
symbols = "{}[]!?$(),.<>"
numbers = "0123456789"

all = lower + upper + symbols + numbers

print('-- Password Generator by Kevin Lutz --')

while True:
    password = ''
    length = input('\nEnter a length: ')

    for i in range(int(length)):
        password += str(''.join(random.sample(all, 1)))

    print('Password generated:', password)