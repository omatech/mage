class Translator {
    constructor(key, params = {}) {
        this.key = key;
        this.params = this.normalizeParams(params);
        this.text = this.getText(key);
        this.text = this.replaceParams(this.text, params);
    }

    normalizeParams(params) {
        if (typeof params === 'undefined') {
            return {};
        }

        if(typeof params !== 'object') {
            throw new Error(`Translator Error: Invalid parameters format`);
        }

        return params;
    }

    replaceParams(text, params) {
        Object.keys(params).forEach(function(key) {
            text = text.replace(`:${key}`, params[key]);
        });

        return text;
    }

    getText(key) {
        let text = Translations[key];

        if(text === undefined) {
            this.createTranslation(key);
            return key;
        }

        return text;
    }

    createTranslation(key) {
        axios.post(route('mage.translations.add'), { key: key });
    }

    get() {
        return this.text;
    }
}

export default function trans(key, params) {
    return new Translator(key, params).get();
};