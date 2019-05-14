class T {
    constructor(value, key = null, params = {}) {
        this.key = key;
        this.params = params;
        this.value = value;
    }

    getText(key) {
        let text = Translations[key];

        if(text === undefined) {
            this.createTranslationWithValue(this.value, key);
            return this.value;
        }

        return trans(this.key, this.params);
    }

    createTranslationWithValue(value, key) {
        axios.post(route('mage.translations.add'), { value: value, key: key });
    }

    t() {
        if(this.key == null) return this.value;
        return this.getText(this.key);
    }
}

export default function t(value, key, params) {
    return new T(value, key, params).t();
};