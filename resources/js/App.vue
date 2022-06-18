<template lang="">
    <div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-9">
                <form @submit.prevent="submit" enctype="multipart/form-data">
                    <div v-if="currentSteps == 1" class="step-one">
                        <div class="card">
                            <div class="card-header bg-secondary text-white">
                                STEP 1/4 - Personal Profile
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">First name</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Enter first name"
                                                name="firstName"
                                                v-model="studentData.firstName"
                                            />

                                            <div
                                                v-for="error of v$.firstName
                                                    .$errors"
                                                :key="error.$uid"
                                            >
                                                <span
                                                    class="text-danger text-sm"
                                                    >{{ error.$message }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Last name</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Enter last name"
                                                v-model="studentData.lastName"
                                                name="lastName"
                                            />
                                            <div
                                                v-for="error of v$.lastName
                                                    .$errors"
                                                :key="error.$uid"
                                            >
                                                <span
                                                    class="text-danger text-sm"
                                                    >{{ error.$message }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Gender</label>
                                            <select
                                                class="form-control"
                                                v-model="studentData.gender"
                                                name="gender"
                                            >
                                                <option
                                                    value=""
                                                    disabled
                                                    selected
                                                    hidden
                                                >
                                                    Choose gender
                                                </option>
                                                <option value="male">
                                                    Male
                                                </option>
                                                <option value="female">
                                                    Female
                                                </option>
                                            </select>
                                            <div
                                                v-for="error of v$.gender
                                                    .$errors"
                                                :key="error.$uid"
                                            >
                                                <span
                                                    class="text-danger text-sm"
                                                    >{{ error.$message }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Age</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                placeholder="Enter your age"
                                                v-model="studentData.age"
                                                name="age"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                maxlength="2"
                                            />
                                            <div
                                                v-for="error of v$.age.$errors"
                                                :key="error.$uid"
                                            >
                                                <span
                                                    class="text-danger text-sm"
                                                    >{{ error.$message }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea
                                        class="form-control"
                                        cols="2"
                                        rows="2"
                                        v-model="studentData.description"
                                        name="description"
                                    ></textarea>
                                    <div
                                        v-for="error of v$.description.$errors"
                                        :key="error.$uid"
                                    >
                                        <span class="text-danger text-sm"
                                            >{{ error.$message }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-if="currentSteps == 2" class="step-two mt-3">
                        <div class="card">
                            <div class="card-header bg-secondary text-white">
                                STEP 2/4 - Address & Contacts
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email Address</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Enter email address"
                                                v-model="studentData.email"
                                                name="email"
                                            />
                                            <div
                                                v-for="error of v$.email
                                                    .$errors"
                                                :key="error.$uid"
                                            >
                                                <span
                                                    class="text-danger text-sm"
                                                    >{{ error.$message }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                placeholder="Enter phone number"
                                                v-model="studentData.phone"
                                                name="phone"
                                            />
                                            <div
                                                v-for="error of v$.phone
                                                    .$errors"
                                                :key="error.$uid"
                                            >
                                                <span
                                                    class="text-danger text-sm"
                                                    >{{ error.$message }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""
                                                >Country of residence</label
                                            >
                                            <select
                                                class="form-control"
                                                v-model="studentData.country"
                                                name="country"
                                            >
                                                <option
                                                    value=""
                                                    disabled
                                                    selected
                                                    hidden
                                                >
                                                    Select country
                                                </option>
                                                <option value="United States">
                                                    United States
                                                </option>
                                                <option value="India">
                                                    India
                                                </option>
                                                <option value="Rwanda">
                                                    Rwanda
                                                </option>
                                                <option value="Nigeria">
                                                    Nigeria
                                                </option>
                                                <option value="Phillipines">
                                                    Phillipines
                                                </option>
                                                <option value="Canada">
                                                    Canada
                                                </option>
                                                <option value="Bangladesh">
                                                    Bangladesh
                                                </option>
                                            </select>
                                            <div
                                                v-for="error of v$.country
                                                    .$errors"
                                                :key="error.$uid"
                                            >
                                                <span
                                                    class="text-danger text-sm"
                                                    >{{ error.$message }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">City</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Enter city"
                                                v-model="studentData.city"
                                                name="city"
                                            />
                                            <div
                                                v-for="error of v$.city.$errors"
                                                :key="error.$uid"
                                            >
                                                <span
                                                    class="text-danger text-sm"
                                                    >{{ error.$message }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-if="currentSteps == 3" class="step-three mt-3">
                        <div class="card">
                            <div class="card-header bg-secondary text-white">
                                STEP 3/4 - Frameworks experience
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Tenetur explicabo, impedit
                                maxime possimus excepturi veniam ut error sit,
                                molestias aliquam repellat eos porro? Sit ex
                                voluptates nemo veritatis delectus quia?
                                <div
                                    class="frameworks d-flex flex-column align-items-left mt-2"
                                >
                                    <label for="laravel">
                                        <input
                                            type="checkbox"
                                            id="laravel"
                                            value="laravel"
                                            v-model="studentData.frameworks"
                                            name="frameworks[]"
                                        />
                                        Laravel
                                    </label>
                                    <label for="codeigniter">
                                        <input
                                            type="checkbox"
                                            id="codeigniter"
                                            value="codeigniter"
                                            v-model="studentData.frameworks"
                                            name="frameworks[]"
                                        />
                                        Codeigniter
                                    </label>
                                    <label for="vuejs">
                                        <input
                                            type="checkbox"
                                            id="vuejs"
                                            value="vuejs"
                                            v-model="studentData.frameworks"
                                            name="frameworks[]"
                                        />
                                        Vue Js
                                    </label>
                                    <label for="cakePHP">
                                        <input
                                            type="checkbox"
                                            id="cakePHP"
                                            value="cakePHP"
                                            v-model="studentData.frameworks"
                                            name="frameworks[]"
                                        />
                                        CakePHP
                                    </label>
                                </div>
                                <div
                                    v-for="error of v$.frameworks.$errors"
                                    :key="error.$uid"
                                >
                                    <span class="text-danger text-sm"
                                        >{{ error.$message }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-if="currentSteps == 4" class="step-four mt-3">
                        <div class="card">
                            <div class="card-header bg-secondary text-white">
                                STEP 4/4 - Attachments
                            </div>
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Itaque delectus officia
                                inventore id facere at aspernatur ad corrupti
                                asperiores placeat, fugiat tempora soluta optio
                                recusandae eligendi impedit ipsam ullam amet!
                                <div class="form-group">
                                    <label for="cv">CV</label>
                                    <input
                                        type="file"
                                        class="form-control"
                                        name="cv"
                                        id="cv"
                                        @change="processFile($event)"
                                    />
                                    <span
                                        v-if="errors.cv"
                                        class="text-danger"
                                        >{{ errors.cv[0] }}</span
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="terms" class="d-block">
                                        <input
                                            type="checkbox"
                                            id="terms"
                                            v-model="studentData.terms"
                                            name="terms"
                                        />
                                        You must agree with our
                                        <a href="#">Terms and Conditions</a>
                                    </label>
                                    <div
                                        v-for="error of v$.terms.$errors"
                                        :key="error.$uid"
                                    >
                                        <span class="text-danger text-sm"
                                            >{{ error.$message }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="action-buttons d-flex justify-content-center bg-white pt-2 pb-2 mt-3"
                    >
                        <div
                            v-if="
                                currentSteps == 2 ||
                                currentSteps == 3 ||
                                currentSteps == 4
                            "
                        >
                            <button
                                @click="decreaseStep"
                                type="button"
                                class="btn btn-md btn-secondary me-2"
                            >
                                Back
                            </button>
                        </div>

                        <div
                            v-if="
                                currentSteps == 1 ||
                                currentSteps == 2 ||
                                currentSteps == 3
                            "
                        >
                            <button
                                @click="increaseStep"
                                type="button"
                                class="btn btn-md btn-success me-2"
                            >
                                Next
                            </button>
                        </div>
                        <div v-if="currentSteps == 4">
                            <button
                                type="submit"
                                class="btn btn-md btn-primary"
                            >
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import { ref, reactive, computed } from "vue";
import useVuelidate from "@vuelidate/core";
import axios from "axios";
import {
    required,
    email,
    minLength,
    maxValue,
    maxLength,
} from "@vuelidate/validators";
export default {
    setup() {
        // define the v-model
        const studentData = reactive({
            firstName: "",
            lastName: "",
            gender: "",
            age: "",
            description: "",
            email: "",
            phone: "",
            country: "",
            city: "",
            frameworks: [],
            cv: "",
            terms: "",
        });

        const errors = ref([]);

        // define the steps
        const totalSteps = ref(4);
        const currentSteps = ref(1);

        // rules
        // const rules = {
        //     firstName: { required },
        //     lastName: { required },
        //     gender: { required },
        //     age: { required },
        //     description: { required },
        // };

        const rules = computed(() => {
            if (currentSteps.value == 1) {
                return {
                    firstName: { required },
                    lastName: { required },
                    gender: { required },
                    age: { required, maxLength: maxLength(2) },
                    description: { required },
                };
            }
            if (currentSteps.value == 2) {
                return {
                    email: { required, email },
                    phone: { required },
                    country: { required },
                    city: { required },
                };
            }
            if (currentSteps.value == 3) {
                return {
                    frameworks: { required, minLength: minLength(2) },
                };
            }
            if (currentSteps.value == 4) {
                return {
                    terms: { required },
                };
            }
        });

        // method for next
        const increaseStep = () => {
            checkValidation();
            if (!v$.value.$errors.length) {
                v$.value.$reset();
                currentSteps.value++;
                if (currentSteps.value > totalSteps.value) {
                    currentSteps.value == currentSteps.value;
                }
            }
        };

        // method for previous
        const decreaseStep = () => {
            v$.value.$reset();
            currentSteps.value--;
            if (currentSteps.value < 1) {
                currentSteps.value = 1;
            }
        };

        const resetForm = () => {
            (studentData.firstName = null),
                (studentData.lastName = null),
                (studentData.gender = null),
                (studentData.age = null),
                (studentData.description = null),
                (studentData.email = null),
                (studentData.phone = null),
                (studentData.country = null),
                (studentData.city = null),
                (studentData.frameworks = [""]),
                (studentData.cv = null),
                (studentData.terms = null);
        };

        const submit = async () => {
            checkValidation();

            if (!v$.value.$errors.length) {
                const config = {
                    headers: {
                        "content-type": "multipart/form-data",
                    },
                };
                let data = new FormData();
                // data.append("firstName", studentData.cv);
                // data.append("lastName", studentData.lastName);
                // data.append("gender", studentData.gender);
                // data.append("description", studentData.description);
                // data.append("email", studentData.email);
                // data.append("phone", studentData.phone);
                // data.append("country", studentData.country);
                // data.append("city", studentData.city);
                // data.append("frameworks", studentData.frameworks);
                // data.append("terms", studentData.terms);

                _.each(studentData, (value, key) => {
                    if (key == "cv") {
                        return;
                    }
                    data.append(key, value);
                });

                if (studentData.cv != null) {
                    data.append("cv", studentData.cv);
                }
                await axios
                    .post("/register", data, config)
                    .then((response) => {
                        if (response.data.success) {
                            resetForm();
                            currentSteps.value = 1;
                            alert(response.data.success);
                        }
                    })
                    .catch((err) => {
                        // console.log(err);
                        if (err.response.status === 422) {
                            for (const key in err.response.data.errors) {
                                // console.log(err.response.data.errors.address[0]);
                                // console.log(error.value.name[0]);
                                errors.value = err.response.data.errors;
                            }
                        }
                        console.log(errors.value);
                    });
            }
        };

        // test
        // const submit = () => {
        //     checkValidation();
        //     // Object.entries(studentData).forEach(([key, value]) => {
        //     //     console.log(key, value);
        //     // });
        //     _.each(studentData, (value, key) => {
        //         if (key == "cv") {
        //             return;
        //         }
        //         console.log(key, value);
        //     });
        // };

        const processFile = (event) => {
            // console.log(event.target.files[0]);
            studentData.cv = event.target.files[0];
            console.log(studentData.cv);
        };

        const v$ = useVuelidate(rules, studentData);

        const checkValidation = () => {
            v$.value.$validate();
            // console.log(v$.value);
        };

        return {
            studentData,
            totalSteps,
            currentSteps,
            errors,
            increaseStep,
            decreaseStep,
            v$,
            checkValidation,
            submit,
            processFile,
        };
    },
};
</script>
<style lang=""></style>
