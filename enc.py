#!/usr/bin/python3

from cryptography.fernet import Fernet

class Cipher():
    def __init__ (self):
        self.key = "f0U7KuGLSYc0QWzStW1eB5btEQMXfwNsHtf223Cf3Ws="
        #self.key = "ZjBVN0t1R0xTWWMwUVd6U3RXMWVCNWJ0RVFNWGZ3TnNIdGYyMjNDZjNXcz0=" # real origin key?

    def encrypt(self, message):
        module = Fernet(self.key)
        return module.encrypt(message)

    def decrypt(self, message):
        module = Fernet(self.key)
        return module.decrypt(message)

if __name__ == "__main__":
    encrypted_key = b"gAAAAABfmvjha5rv2AAO7DF1fYr2NOWHMMvs52Pt8IMj0eKD_U4B87TGn83mVsvxIzplorHu3TMYabBk-eM4W1UmAt44ku1e3zQ1_zv9AvYW0XLeDMSuFeA="
    dec = Cipher().decrypt(encrypted_key)
    print(dec)
