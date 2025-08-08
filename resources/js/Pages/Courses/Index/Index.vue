<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { router, usePage } from "@inertiajs/vue3";

const page = usePage();

const createCourse = () => {
	router.post(route("courses.create", { user: page.props.auth.user.id }));
};
</script>

<template>
	<AppLayout title="Courses">
		<template #header> Courses </template>

		<div>This is where our existing courses will be</div>

		<div>
			<button @click="createCourse()">Create Course</button>
		</div>

		<div>
			{{ page.props.auth.user.id }}
		</div>
	</AppLayout>
</template>
