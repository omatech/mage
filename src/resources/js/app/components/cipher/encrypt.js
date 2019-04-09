export function encrypt(message, key) {

    let publicKey = base64.toUInt8Array(key);

    return new Promise((resolve, reject) => {
        message = sodium.crypto_box_seal(message, publicKey);

        if(message !== false) {
            resolve(message);
        } else {
            reject(false);
        }
    });
}
