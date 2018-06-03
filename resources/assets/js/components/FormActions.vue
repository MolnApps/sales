<template>
	<div class="Group__actions">
		<!-- View mode -->
		<div v-if="isEditable && ! isEditing">
			<button @click="edit" class="Button Button--edit">Edit</button>
		</div>
		<!-- Editing mode -->
		<div v-if="isEditing">
			<button @click="save" class="Button Button--save">Save</button>
			<button @click="cancel" class="Button Button--cancel">Cancel</button>
		</div>
	</div>
</template>
<script>
	export default {
		props: ['is-editable'],
		data: function() {
			return {
				isEditing: false,
			};
		},
		methods: {
			edit: function() {
				this.isEditing = true;
				this.$emit('edit');
			},
			save: function() {
				this.isEditing = false;
				this.$emit('save');
			},
			cancel: function() {
				this.isEditing = false;
				this.$emit('cancel');
			}
		}
	}
</script>