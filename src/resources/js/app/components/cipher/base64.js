export function toUInt8Array(ascii) {
    return Uint8Array.from(atob(ascii), c => c.charCodeAt(0));
}

export function fromUInt8Array(buffer) {
    var binary = [];
    var bytes = new Uint8Array(buffer);
    for (var i = 0, il = bytes.byteLength; i < il; i++) {
        binary.push(String.fromCharCode(bytes[i]));
    }
    return btoa(binary.join(""));
}