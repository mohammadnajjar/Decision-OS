/*
Template Name: Fabkin - Admin & Dashboard Template
Author: Pixeleyez
Website: https://pixeleyez.com/
Contact: pixeleyez@gmail.com
File: Advanced Form init js
*/

document.addEventListener("DOMContentLoaded", function () {
  initTagify();
  initPasswordToggle();
  initPasswordValidation();
  initClipboard();
  initQuantityInputs();
});

/**
* Initialize all Tagify instances
*/
function initTagify() {
  // Basic Tagify
  const inputTagify = document.querySelector('input[name=basic]');
  if (inputTagify) {
    new Tagify(inputTagify);
  }

  // Readonly Tags
  const readonlyInput = document.querySelector('input[name=tags4]');
  if (readonlyInput) {
    new Tagify(readonlyInput);
  }

  // Readonly Mix
  const readonlyMixInput = document.querySelector('input[name=tags-readonly-mix]');
  if (readonlyMixInput) {
    new Tagify(readonlyMixInput);
  }

  // Tagify With Custom Suggestions
  initTagifyCustomSuggestions();

  // Tagify With Disabled User Input
  initTagifyDisabledUserInput();

  // Tagify Single-Value Select
  initTagifySingleValueSelect();

  // Tagify With Mix Text & Tags
  initTagifyMixTextAndTags();

  // Tagify With User List Tags
  initTagifyUserListTags();

  // RTL Example
  initTagifyRtlExample();
}

/**
* Initialize Tagify with custom suggestions
*/
function initTagifyCustomSuggestions() {
  const inputCustom = document.querySelector('input[name="input-custom-dropdown"]');
  if (!inputCustom) return;

  const programmingLanguages = ["A# .NET", "A# (Axiom)", "A-0 System", "A+", "A++", "ABAP", "ABC", "ABC ALGOL", "ABSET", "ABSYS", "ACC", "Accent", "Ace DASL", "ACL2", "Avicsoft", "ACT-III", "Action!", "ActionScript", "Ada", "Adenine", "Agda", "Agilent VEE", "Agora", "AIMMS", "Alef", "ALF", "ALGOL 58", "ALGOL 60", "ALGOL 68", "ALGOL W", "Alice", "Alma-0", "AmbientTalk", "Amiga E", "AMOS", "AMPL", "Apex (Salesforce.com)", "APL", "AppleScript", "Arc", "ARexx", "Argus", "AspectJ", "Assembly language", "ATS", "Ateji PX", "AutoHotkey", "Autocoder", "AutoIt", "AutoLISP / Visual LISP", "Averest", "AWK", "Axum", "Active Server Pages", "ASP.NET", "B", "Babbage", "Bash", "BASIC", "bc", "BCPL", "BeanShell", "Batch (Windows/Dos)", "Bertrand", "BETA", "Bigwig", "Bistro", "BitC", "BLISS", "Blockly", "BlooP", "Blue", "Boo", "Boomerang", "Bourne shell (including bash and ksh)", "BREW", "BPEL", "B", "C--", "C++ – ISO/IEC 14882", "C# – ISO/IEC 23270", "C/AL", "Caché ObjectScript", "C Shell", "Caml", "Cayenne", "CDuce", "Cecil", "Cesil", "Céu", "Ceylon", "CFEngine", "CFML", "Cg", "Ch", "Chapel", "Charity", "Charm", "Chef", "CHILL", "CHIP-8", "chomski", "ChucK", "CICS", "Cilk", "Citrine (programming language)", "CL (IBM)", "Claire", "Clarion", "Clean", "Clipper", "CLIPS", "CLIST", "Clojure", "CLU", "CMS-2", "COBOL – ISO/IEC 1989", "CobolScript – COBOL Scripting language", "Cobra", "CODE", "CoffeeScript", "ColdFusion", "COMAL", "Combined Programming Language (CPL)", "COMIT", "Common Intermediate Language (CIL)", "Common Lisp (also known as CL)", "COMPASS", "Component Pascal", "Constraint Handling Rules (CHR)", "COMTRAN", "Converge", "Cool", "Coq", "Coral 66", "Corn", "CorVision", "COWSEL", "CPL", "CPL", "Cryptol", "csh", "Csound", "CSP", "CUDA", "Curl", "Curry", "Cybil", "Cyclone", "Cython", "Java", "Javascript", "M2001", "M4", "M#", "Machine code", "MAD (Michigan Algorithm Decoder)", "MAD/I", "Magik", "Magma", "make", "Maple", "MAPPER now part of BIS", "MARK-IV now VISION:BUILDER", "Mary", "MASM Microsoft Assembly x86", "MATH-MATIC", "Mathematica", "MATLAB", "Maxima (see also Macsyma)", "Max (Max Msp – Graphical Programming Environment)", "Maya (MEL)", "MDL", "Mercury", "Mesa", "Metafont", "Microcode", "MicroScript", "MIIS", "Milk (programming language)", "MIMIC", "Mirah", "Miranda", "MIVA Script", "ML", "Model 204", "Modelica", "Modula", "Modula-2", "Modula-3", "Mohol", "MOO", "Mortran", "Mouse", "MPD", "Mathcad", "MSIL – deprecated name for CIL", "MSL", "MUMPS", "Mystic Programming L"];

  new Tagify(inputCustom, {
    whitelist: programmingLanguages,
    maxTags: 10,
    dropdown: {
      maxItems: 20,
      classname: "tags-look",
      enabled: 0,
      closeOnSelect: false
    }
  });
}

/**
* Initialize Tagify with disabled user input
*/
function initTagifyDisabledUserInput() {
  const inputDisabled = document.querySelector('input[name=tags-disabled-user-input]');
  if (!inputDisabled) return;

  new Tagify(inputDisabled, {
    whitelist: [1, 2, 3, 4, 5],
    userInput: false
  });
}

/**
* Initialize Tagify single-value select
*/
function initTagifySingleValueSelect() {
  const input = document.querySelector('input[name=tags-select-mode]');
  if (!input) return;

  const tagify = new Tagify(input, {
    enforceWhitelist: true,
    mode: "select",
    whitelist: ["first option", "second option", "third option"],
    blacklist: ['foo', 'bar'],
  });

  // Bind events
  tagify.on('add', onAddTag);
  if (tagify.DOM.input) {
    tagify.DOM.input.addEventListener('focus', onSelectFocus);
  }

  function onAddTag(e) {
    console.log(e.detail);
  }

  function onSelectFocus(e) {
    console.log(e);
  }
}

/**
* Initialize Tagify with mix text and tags
*/
function initTagifyMixTextAndTags() {
  const input = document.querySelector('[name=mix]');
  if (!input) return;

  // Define whitelists
  const whitelist_1 = [
    { value: 100, text: 'kenny', title: 'Kenny McCormick' },
    { value: 200, text: 'cartman', title: 'Eric Cartman' },
    { value: 300, text: 'kyle', title: 'Kyle Broflovski' },
    { value: 400, text: 'token', title: 'Token Black' },
    { value: 500, text: 'jimmy', title: 'Jimmy Valmer' },
    { value: 600, text: 'butters', title: 'Butters Stotch' },
    { value: 700, text: 'stan', title: 'Stan Marsh' },
    { value: 800, text: 'randy', title: 'Randy Marsh' },
    { value: 900, text: 'Mr. Garrison', title: 'POTUS' },
    { value: 1000, text: 'Mr. Mackey', title: "M'Kay" }
  ];

  const whitelist_2 = ['Homer simpson', 'Marge simpson', 'Bart', 'Lisa', 'Maggie', 'Mr. Burns', 'Ned', 'Milhouse', 'Moe'];

  // Initialize Tagify
  const tagify = new Tagify(input, {
    mode: 'mix',
    pattern: /@|#/,
    tagTextProp: 'text',
    whitelist: whitelist_1.concat(whitelist_2).map(function (item) {
      return typeof item == 'string' ? { value: item } : item;
    }),

    validate(data) {
      return !/[^a-zA-Z0-9 ]/.test(data.value);
    },

    dropdown: {
      enabled: 1,
      position: 'text',
      mapValueTo: 'text',
      highlightFirst: true
    },
    callbacks: {
      add: console.log,
      remove: console.log
    }
  });

  // Handle input events
  tagify.on('input', function (e) {
    const prefix = e.detail.prefix;

    if (prefix) {
      if (prefix == '@') {
        tagify.whitelist = whitelist_1;
      }

      if (prefix == '#') {
        tagify.whitelist = whitelist_2;
      }

      if (e.detail.value.length > 1) {
        tagify.dropdown.show(e.detail.value);
      }
    }
  });

  tagify.on('add', function (e) {
    console.log(e);
  });
}

/**
* Initialize Tagify with user list tags
*/
function initTagifyUserListTags() {
  const inputElm = document.querySelector('input[name=users-list-tags]');
  if (!inputElm) return;

  function tagTemplate(tagData) {
    return `
          <tag title="${tagData.email}"
              contenteditable='false'
              spellcheck='false'
              tabIndex="-1"
              class="tagify__tag ${tagData.class ? tagData.class : ""}"
              ${this.getAttributes(tagData)}>
              <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
              <div>
                  <div class='tagify__tag__avatar-wrap'>
                      <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                  </div>
                  <span class='tagify__tag-text'>${tagData.name}</span>
              </div>
          </tag>
      `;
  }

  function suggestionItemTemplate(tagData) {
    return `
          <div ${this.getAttributes(tagData)}
              class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
              tabindex="0"
              role="option">
              ${tagData.avatar ? `
                  <div class='tagify__dropdown__item__avatar-wrap'>
                      <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                  </div>` : ''
      }
              <strong>${tagData.name}</strong>
              <span>${tagData.email}</span>
          </div>
      `;
  }

  function dropdownHeaderTemplate(suggestions) {
    return `
          <header data-selector='tagify-suggestions-header' class="${this.settings.classNames.dropdownItem} ${this.settings.classNames.dropdownItem}__addAll">
              <strong style='grid-area: add'>${this.value.length ? `Add Remaning` : 'Add All'}</strong>
              <span style='grid-area: remaning'>${suggestions.length} members</span>
              <a class='remove-all-tags'>Remove all</a>
          </header>
      `;
  }

  // Escape HTML function
  function escapeHTML(s) {
    return typeof s == 'string' ? s
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/`|'/g, "&#39;")
      : s;
  }

  // User whitelist data
  const userWhitelist = [
    {
      "value": 1,
      "name": "Justinian Hattersley",
      "avatar": "https://i.pravatar.cc/80?img=1",
      "email": "jhattersley0@ucsd.edu",
      "team": "A"
    },
    {
      "value": 2,
      "name": "Antons Esson",
      "avatar": "https://i.pravatar.cc/80?img=2",
      "email": "aesson1@ning.com",
      "team": "B"
    },
    {
      "value": 3,
      "name": "Ardeen Batisse",
      "avatar": "https://i.pravatar.cc/80?img=3",
      "email": "abatisse2@nih.gov",
      "team": "A"
    },
    {
      "value": 4,
      "name": "Graeme Yellowley",
      "avatar": "https://i.pravatar.cc/80?img=4",
      "email": "gyellowley3@behance.net",
      "team": "C"
    },
    {
      "value": 5,
      "name": "Dido Wilford",
      "avatar": "https://i.pravatar.cc/80?img=5",
      "email": "dwilford4@jugem.jp",
      "team": "A"
    },
    {
      "value": 6,
      "name": "Celesta Orwin",
      "avatar": "https://i.pravatar.cc/80?img=6",
      "email": "corwin5@meetup.com",
      "team": "C"
    },
    {
      "value": 7,
      "name": "Sally Main",
      "avatar": "https://i.pravatar.cc/80?img=7",
      "email": "smain6@techcrunch.com",
      "team": "A"
    },
    {
      "value": 8,
      "name": "Grethel Haysman",
      "avatar": "https://i.pravatar.cc/80?img=8",
      "email": "ghaysman7@mashable.com",
      "team": "B"
    },
    {
      "value": 9,
      "name": "Marvin Mandrake",
      "avatar": "https://i.pravatar.cc/80?img=9",
      "email": "mmandrake8@sourceforge.net",
      "team": "B"
    },
    {
      "value": 10,
      "name": "Corrie Tidey",
      "avatar": "https://i.pravatar.cc/80?img=10",
      "email": "ctidey9@youtube.com",
      "team": "A"
    },
    {
      "value": 11,
      "name": "foo",
      "avatar": "https://i.pravatar.cc/80?img=11",
      "email": "foo@bar.com",
      "team": "B"
    },
    {
      "value": 12,
      "name": "foo",
      "avatar": "https://i.pravatar.cc/80?img=12",
      "email": "foo.aaa@foo.com",
      "team": "A"
    }
  ];

  // Initialize Tagify
  const tagify = new Tagify(inputElm, {
    tagTextProp: 'name',
    skipInvalid: true,
    dropdown: {
      closeOnSelect: false,
      enabled: 0,
      classname: 'users-list',
      searchKeys: ['name', 'email']
    },
    templates: {
      tag: tagTemplate,
      dropdownItem: suggestionItemTemplate,
      dropdownHeader: dropdownHeaderTemplate
    },
    whitelist: userWhitelist,

    transformTag: (tagData, originalData) => {
      const parsed = parseFullValue(tagData.name);
      tagData.name = parsed.name;
      tagData.email = parsed.email || tagData.email;
    },

    validate({ name, email }) {
      // When editing a tag, there will only be the "name" property which contains name + email
      if (!email && name) {
        const parsed = parseFullValue(name);
        name = parsed.name;
        email = parsed.email;
      }

      if (!name) return "Missing name";
      if (!validateEmail(email)) return "Invalid email";

      return true;
    }
  });

  // Custom dropdown HTML creation
  tagify.dropdown.createListHTML = sugegstionsList => {
    const teamsOfUsers = sugegstionsList.reduce((acc, suggestion) => {
      const team = suggestion.team || 'Not Assigned';

      if (!acc[team])
        acc[team] = [suggestion];
      else
        acc[team].push(suggestion);

      return acc;
    }, {});

    const getUsersSuggestionsHTML = teamUsers => teamUsers.map((suggestion) => {
      if (typeof suggestion == 'string' || typeof suggestion == 'number')
        suggestion = { value: suggestion };

      const value = tagify.dropdown.getMappedValue.call(tagify, suggestion);
      suggestion.value = value && typeof value == 'string' ? escapeHTML(value) : value;

      return tagify.settings.templates.dropdownItem.apply(tagify, [suggestion]);
    }).join("");

    // Assign users to groups
    return Object.entries(teamsOfUsers).map(([team, teamUsers]) => {
      return `<div class="tagify__dropdown__itemsGroup" data-title="Team ${team}:">${getUsersSuggestionsHTML(teamUsers)}</div>`;
    }).join("");
  };

  // Attach events listeners
  tagify.on('dropdown:select', onSelectSuggestion)
    .on('edit:start', onEditStart);

  function onSelectSuggestion(e) {
    if (e.detail.event.target.matches('.remove-all-tags')) {
      tagify.removeAllTags();
    } else if (e.detail.elm.classList.contains(`${tagify.settings.classNames.dropdownItem}__addAll`)) {
      tagify.dropdown.selectAll();
    }
  }

  function onEditStart({ detail: { tag, data } }) {
    tagify.setTagTextNode(tag, `${data.name} <${data.email}>`);
  }

  // Utility functions
  function validateEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  function parseFullValue(value) {
    const parts = value.split(/<(.*?)>/g),
      name = parts[0].trim(),
      email = parts[1]?.replace(/<(.*?)>/g, '').trim();

    return { name, email };
  }
}

/**
* Initialize Tagify RTL example
*/
function initTagifyRtlExample() {
  const input = document.querySelector('input[name=rtl-example]');
  if (!input) return;

  new Tagify(input, {
    whitelist: [
      { value: "מיכאל כהן", full: "מיכאל כהן - פיתוח תוכנה מתקדם ויישום טכנולוגיות חדשניות בתחום התעשייה והייצור" },
      { value: "שרה לוי", full: "שרה לוי - ניהול ופיתוח פתרונות אקולוגיים וסביבתיים למתן יתרון תחרותי לעסקים" },
      { value: "אברהם גולן", full: "אברהם גולן - יישום ופיתוח טכנולוגיות מתקדמות לשיפור פרודוקטיביות ויצירתיות בארגונים" },
      { value: "רחל רביבו", full: "רחל רביבו - מחקר ופיתוח טכנולוגי בתחום החדשנות והיזמות לקידום עסקים ותעשיות" },
      { value: "דוד כהן", full: "דוד כהן - פיתוח ויישום טכנולוגיות מתקדמות לשיפור תשתיות מידע עסקיות" },
      { value: "רבקה אריאל", full: "רבקה אריאל - ייזום ופיתוח מוצרים חדשניים עבור תעשיות יצירתיות ומתקדמות" }
    ],
    dropdown: {
      mapValueTo: 'full',
      classname: 'tagify__dropdown--rtl-example',
      enabled: 0,
      RTL: true,
      escapeHTML: false
    }
  });
}

/**
* Initialize password toggle functionality
*/
function initPasswordToggle() {
  const toggles = document.querySelectorAll(".toggle-password");
  if (!toggles.length) return;

  toggles.forEach((toggle) => {
    toggle.addEventListener("click", function () {
      const targetId = this.getAttribute("data-target");
      if (!targetId) return;

      const targetInput = document.getElementById(targetId);
      if (!targetInput) return;

      const icon = this.querySelector("i");
      if (!icon) return;

      if (targetInput.type === "password") {
        targetInput.type = "text";
        icon.classList.replace("ri-eye-off-line", "ri-eye-line");
      } else {
        targetInput.type = "password";
        icon.classList.replace("ri-eye-line", "ri-eye-off-line");
      }
    });
  });
}

/**
* Initialize password validation
*/
function initPasswordValidation() {
  const newPassword = document.getElementById("newPassword");
  const confirmPassword = document.getElementById("confirmPassword");
  const passwordError = document.getElementById("passwordError");
  const updatePasswordBtn = document.getElementById("updatePasswordBtn");

  if (!newPassword || !confirmPassword || !passwordError || !updatePasswordBtn) return;

  // Add event listeners for password matching validation
  const validatePasswords = () => {
    if (newPassword.value !== confirmPassword.value) {
      passwordError.style.setProperty("display", "block");
      updatePasswordBtn.setAttribute("disabled", "true");
    } else {
      passwordError.style.setProperty("display", "none");
      updatePasswordBtn.removeAttribute("disabled");
    }
  };

  newPassword.addEventListener("input", validatePasswords);
  confirmPassword.addEventListener("input", validatePasswords);
}

/**
* Initialize clipboard functionality
*/
function initClipboard() {
  // Input field clipboard
  initClipboardElement(
    document.getElementById("clipboardInputField"),
    document.getElementById("copyButtonInput"),
    document.getElementById("cutButtonInput")
  );

  // Textarea clipboard
  initClipboardElement(
    document.getElementById("clipboardTextarea"),
    document.getElementById("copyButtonTextarea"),
    document.getElementById("cutButtonTextarea")
  );

  // Clipboard with icon change
  initClipboardWithIcon();
}

/**
* Initialize clipboard for a specific element
* @param {HTMLElement} field - The input/textarea field
* @param {HTMLElement} copyButton - The copy button
* @param {HTMLElement} cutButton - The cut button (optional)
*/
function initClipboardElement(field, copyButton, cutButton) {
  if (!field || !copyButton) return;

  function handleClipboardAction(action) {
    if (!field.value.trim()) {
      alert("Please enter text before " + action + "ing.");
      return;
    }

    field.select();
    try {
      const success = document.execCommand(action);
      if (success) {
        alert(`Text ${action}ed to clipboard!`);
      } else {
        throw new Error(`Failed to ${action} text`);
      }
    } catch (err) {
      console.error(`Clipboard ${action} failed:`, err);
      alert(`Unable to ${action} text to clipboard. Please try again.`);
    }
  }

  copyButton.addEventListener("click", function () {
    handleClipboardAction("copy");
  });

  if (cutButton) {
    cutButton.addEventListener("click", function () {
      handleClipboardAction("cut");
    });
  }
}

/**
* Initialize clipboard with icon change
*/
function initClipboardWithIcon() {
  const iconInputField = document.querySelector(".clipboard-input");
  const copyButtonIcon = document.querySelector(".clipboard-button");
  const icon = document.querySelector(".clipboard-icon");

  if (!iconInputField || !copyButtonIcon || !icon) return;

  copyButtonIcon.addEventListener("click", function () {
    if (!iconInputField.value.trim()) {
      alert("Please enter text before copying.");
      return;
    }

    iconInputField.select();
    try {
      const success = document.execCommand("copy");
      if (success) {
        icon.classList.replace("ri-file-copy-line", "ri-check-line");
        setTimeout(() => {
          icon.classList.replace("ri-check-line", "ri-file-copy-line");
        }, 2000);
        alert("Text copied to clipboard!");
      } else {
        throw new Error("Copy command failed");
      }
    } catch (err) {
      console.error("Clipboard copy failed:", err);
      alert("Failed to copy text. Please try again.");
    }
  });
}

/**
* Initialize quantity input controls
*/
function initQuantityInputs() {
  document.querySelectorAll(".qty-input").forEach(qtyInput => {
    const input = qtyInput.querySelector("input");
    if (!input) return;

    const min = parseInt(input.getAttribute("min")) || 0;
    const max = parseInt(input.getAttribute("max")) || 100;

    const minusBtn = qtyInput.querySelector("[data-action='minus']");
    const plusBtn = qtyInput.querySelector("[data-action='plus']");

    if (minusBtn) {
      minusBtn.addEventListener("click", function () {
        let value = parseInt(input.value) || 0;
        if (value > min) {
          input.value = value - 1;
          // Trigger change event for potential listeners
          input.dispatchEvent(new Event('change', { bubbles: true }));
        }
      });
    }

    if (plusBtn) {
      plusBtn.addEventListener("click", function () {
        let value = parseInt(input.value) || 0;
        if (value < max) {
          input.value = value + 1;
          // Trigger change event for potential listeners
          input.dispatchEvent(new Event('change', { bubbles: true }));
        }
      });
    }
  });
}