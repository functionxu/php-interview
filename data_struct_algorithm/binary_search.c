#include <stdio.h>
  
#define MAX_LEN 10

int binarySearch(int *, int, int, int);

int main() {
    int arr[MAX_LEN] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};
    int index;
    int target = 11;

    index = binarySearch(arr, 0, MAX_LEN - 1, target);

    printf("find target number, index=%d\n", index);
    return 0;
}

int binarySearch(int *arr, int start, int end, int target) {
    if (start == end) {
        return -1;
    }
    int i;
    int middle = (start + end) / 2;

    if (arr[middle] == target) {
        return middle;
    }

    if (arr[middle] > target) {
        end = middle - 1;
    } else {
        start = middle + 1;
    }

    return binarySearch(arr, start, end, target);
}
