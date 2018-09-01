
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/** main js */
document.addEventListener("DOMContentLoaded", function () {
    class SkillObject {
        constructor(id) {
            this.id = id;
            this.object = document.getElementById(id);
        }

        toString() {
            console.log("Hello, I am " + this.constructor.name + ", id=" + this.id);
        }
    }

    class SkillSearchInput extends SkillObject {

    }

    class SkillList extends SkillObject {
        constructor(id) {
            super(id);
            this.list = [];
        }

        getList(query) {
            //TODO get skill list from server

            console.log("getList");
        }

        render() {
            //TODO render list method
            console.log("render");
        }

        refresh(query) {
            this.getList(query);
            this.render();
        }

        hide() {
            this.object.classList.remove('show');
        }

        show() {
            this.object.classList.add('show');
        }
    }

    let input = new SkillSearchInput('searchSkillInput');
    let list = new SkillList('skillList');

    input.object.addEventListener('input', function () {
        let value = input.value;
        if (value === "") {
            list.hide();
        } else if (value.length > 0) {
            list.refresh(value);
            list.show();
        }
    });
});