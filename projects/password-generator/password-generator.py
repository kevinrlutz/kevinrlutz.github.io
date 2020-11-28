import random

lower = "abcdefghijklmnop"
upper = "ABCDEFGHIJKLMNOP"
symbols = "{}[]!?$(),."

all = lower + upper + symbols

print('-- Password Generator by Kevin Lutz --')
while True:
    length = input('\nEnter a length: ')

    password = "".join(random.sample(all, int(length)))

    print('Password generated:', password)
